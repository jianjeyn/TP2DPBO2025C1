import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        ArrayList<Baju> daftarProduk = new ArrayList<>();

        // Menambahkan 5 objek awal ke dalam list
        daftarProduk.add(new Baju("B001", "Baju Anjing", 10, 100000, "Pakaian", "Katun", "Merah", "Anjing", "M", "DogWear"));
        daftarProduk.add(new Baju("B002", "Baju Kucing", 8, 95000, "Pakaian", "Wool", "Biru", "Kucing", "S", "CatStyle"));
        daftarProduk.add(new Baju("B003", "Jaket Anjing", 12, 120000, "Jaket", "Kulit", "Hitam", "Anjing", "L", "DogFashion"));
        daftarProduk.add(new Baju("B004", "Topi Kucing", 15, 45000, "Aksesoris", "Kanvas", "Pink", "Kucing", "S", "CatTrend"));
        daftarProduk.add(new Baju("B005", "Kaus Hewan", 9, 80000, "Pakaian", "Katun", "Hijau", "Umum", "M", "PetWear"));

        // Menampilkan data awal dalam tabel
        tampilkanData(daftarProduk);

        // Memungkinkan user menambahkan produk baru
        System.out.println("\nApakah ingin menambahkan produk baru? (y/n)");
        String pilihan = scanner.next();

        while (pilihan.equalsIgnoreCase("y")) {
            // Input data dari user
            System.out.print("Masukkan ID: ");
            String id = scanner.next();
            System.out.print("Masukkan Nama Produk: ");
            scanner.nextLine(); // membersihkan buffer
            String nama = scanner.nextLine();
            System.out.print("Masukkan Stok: ");
            int stok = scanner.nextInt();
            System.out.print("Masukkan Harga: ");
            double harga = scanner.nextDouble();
            System.out.print("Masukkan Jenis: ");
            scanner.nextLine();
            String jenis = scanner.nextLine();
            System.out.print("Masukkan Bahan: ");
            String bahan = scanner.nextLine();
            System.out.print("Masukkan Warna: ");
            String warna = scanner.nextLine();
            System.out.print("Produk untuk siapa? (Anjing/Kucing/Umum): ");
            String untuk = scanner.nextLine();
            System.out.print("Masukkan Size: ");
            String size = scanner.nextLine();
            System.out.print("Masukkan Merk: ");
            String merk = scanner.nextLine();

            // Menambahkan data ke list
            daftarProduk.add(new Baju(id, nama, stok, harga, jenis, bahan, warna, untuk, size, merk));

            // Menampilkan data terbaru
            tampilkanData(daftarProduk);

            System.out.println("\nApakah ingin menambahkan produk lagi? (y/n)");
            pilihan = scanner.next();
        }

        System.out.println("Program selesai!");
        scanner.close();
    }

    // Method untuk menampilkan data dalam format tabel
    public static void tampilkanData(ArrayList<Baju> daftarProduk) {
        System.out.println("\n=================================================================================================================================");
        System.out.printf("| %-5s | %-15s | %-5s | %-10s | %-10s | %-10s | %-10s | %-10s | %-5s | %-10s |\n",
                "ID", "Nama Produk", "Stok", "Harga", "Jenis", "Bahan", "Warna", "Untuk", "Size", "Merk");
        System.out.println("=================================================================================================================================");
        for (Baju baju : daftarProduk) {
            System.out.printf("| %-5s | %-15s | %-5d | %-10.2f | %-10s | %-10s | %-10s | %-10s | %-5s | %-10s |\n",
                    baju.getId(), baju.getNama(), baju.getStok(), baju.getHarga(),
                    baju.getJenis(), baju.getBahan(), baju.getWarna(),
                    baju.getUntuk(), baju.getSize(), baju.getMerk());
        }
        System.out.println("=================================================================================================================================");
    }
}
