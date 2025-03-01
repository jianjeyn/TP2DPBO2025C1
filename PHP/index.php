<?php
// Include file kelas-kelas untuk mewarisi
require('Baju.php');

session_start(); // Memulai sesi agar data tidak hilang saat halaman di-refresh
if (!isset($_SESSION['list'])) {
    $_SESSION['list'] = [];
    // 5 objek awal dengan contoh produk Baju
    $_SESSION['list'][] = new Baju("1", "Baju Anjing", 10, 100000, "uploads/pfp.jpeg", "Pakaian", "Katun", "Merah", "Anjing", "M", "DogWear");
    $_SESSION['list'][] = new Baju("2", "Baju Kucing", 8, 95000, "uploads/pfp.jpeg", "Pakaian", "Wool", "Biru", "Kucing", "S", "CatStyle");
    $_SESSION['list'][] = new Baju("3", "Jaket Anjing", 12, 120000, "uploads/pfp.jpeg", "Jaket", "Kulit", "Hitam", "Anjing", "L", "DogFashion");
    $_SESSION['list'][] = new Baju("4", "Topi Kucing", 15, 45000, "uploads/pfp.jpeg", "Aksesoris", "Kanvas", "Pink", "Kucing", "One Size", "CatTrend");
    $_SESSION['list'][] = new Baju("5", "Kaus Hewan", 9, 80000, "uploads/pfp.jpeg", "Pakaian", "Katun", "Hijau", "Umum", "M", "PetWear");
}
$list = &$_SESSION['list'];

// Handle add product
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])) {
    $id = strval(count($list) + 1);
    $nama = $_POST['nama'];
    $stok = intval($_POST['stok']);
    $harga = floatval($_POST['harga']);
    $untuk = $_POST['untuk'];
    $size = $_POST['size'];
    $merk = $_POST['merk'];
    $jenis = $_POST['jenis'];
    $bahan = $_POST['bahan'];
    $warna = $_POST['warna'];

    // Upload file
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $fileName = time() . "_" . basename($_FILES['foto']['name']);
        $targetPath = $uploadDir . $fileName;
        move_uploaded_file($_FILES['foto']['tmp_name'], $targetPath);
    } else {
        $targetPath = "uploads/default.jpg"; // Gambar default jika tidak ada yang diunggah
    }

    $list[] = new Baju($id, $nama, $stok, $harga, $targetPath, $jenis, $bahan, $warna, $untuk, $size, $merk);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🐾 Petshop Wonderland 🐾</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background-color: #ffe4e1;
            text-align: center;
            padding: 20px;
        }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background: #fff0f5;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        th, td {
            padding: 15px;
            border: 1px solid #db7093;
        }
        th {
            background-color: #db7093;
            color: white;
        }
        img {
            width: 60px;
            height: auto;
            border-radius: 50%;
            border: 2px solid rgb(223, 98, 140);
        }
        .header {
            font-size: 28px;
            font-weight: bold;
            color: #db7093;
            margin-bottom: 20px;
        }
        button {
            background-color: rgb(223, 98, 140);
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: rgb(223, 98, 140);
        }
        button[name="add"] {
            margin-bottom: 20px; /* Tambah jarak bawah tombol */
            margin-top: 20px;    /* Tambah jarak atas tombol */
        }


    </style>
</head>
<body>
    <div class="header">🐾 Welcome to Petshop Wonderland! 🐾</div>

    <!-- Form untuk menambah produk baru -->
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="nama" placeholder="Nama Produk" required>
        <input type="number" name="stok" placeholder="Stok" required>
        <input type="number" name="harga" placeholder="Harga" required>
        <input type="text" name="jenis" placeholder="Jenis" required>
        <input type="text" name="bahan" placeholder="Bahan" required>
        <input type="text" name="warna" placeholder="Warna" required>
        <input type="text" name="untuk" placeholder="Untuk" required>
        <input type="text" name="size" placeholder="Size" required>
        <input type="text" name="merk" placeholder="Merk" required>
        <input type="file" name="foto" accept="image/*" required>
        <button type="submit" name="add">Tambah Produk</button>
    </form>

    <!-- Tabel untuk menampilkan produk -->
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Produk</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Jenis</th>
            <th>Bahan</th>
            <th>Warna</th>
            <th>Untuk</th>
            <th>Size</th>
            <th>Merk</th>
            <th>Foto</th>
        </tr>
        <?php foreach($list as $item) { ?>
            <tr>
                <td><?= $item->getId() ?></td>
                <td><?= $item->getNama() ?></td>
                <td><?= number_format($item->getStok()) ?></td>
                <td>Rp<?= number_format($item->getHarga(), 0, ',', '.') ?></td>
                <td><?= $item->getJenis() ?></td>
                <td><?= $item->getBahan() ?></td>
                <td><?= $item->getWarna() ?></td>
                <td><?= $item->getUntuk() ?></td>
                <td><?= $item->getSize() ?></td>
                <td><?= $item->getMerk() ?></td>
                <td><img src="<?= $item->getFoto() ?>" alt="Produk"></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
