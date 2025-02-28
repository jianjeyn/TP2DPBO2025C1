from Baju import Baju

# List untuk menyimpan data produk
daftar_produk = [
    Baju("B001", "Baju Anjing", 10, 100000, "Pakaian", "Katun", "Merah", "Anjing", "M", "DogWear"),
    Baju("B002", "Baju Kucing", 8, 95000, "Pakaian", "Wool", "Biru", "Kucing", "S", "CatStyle"),
    Baju("B003", "Jaket Anjing", 12, 120000, "Jaket", "Kulit", "Hitam", "Anjing", "L", "DogFashion"),
    Baju("B004", "Topi Kucing", 15, 45000, "Aksesoris", "Kanvas", "Pink", "Kucing", "S", "CatTrend"),
    Baju("B005", "Kaus Hewan", 9, 80000, "Pakaian", "Katun", "Hijau", "Umum", "M", "PetWear")
]

# Fungsi untuk menampilkan tabel data
def tampilkan_tabel():
    print("\n====================================================================================================================")
    print(f"| {'ID':<5} | {'Nama Produk':<15} | {'Stok':<5} | {'Harga':<10} | {'Jenis':<10} | {'Bahan':<10} | {'Warna':<10} | {'Untuk':<7} | {'Size':<5} | {'Merk':<10} |")
    print("====================================================================================================================")
    for produk in daftar_produk:
        print(f"| {produk.getId():<5} | {produk.getNama():<15} | {produk.getStok():<5} | {produk.getHarga():<10.2f} | {produk.getJenis():<10} | {produk.getBahan():<10} | {produk.getWarna():<10} | {produk.getUntuk():<7} | {produk.getSize():<5} | {produk.getMerk():<10} |")
    print("====================================================================================================================\n")

# Menampilkan data awal
print("\n--- DATA AWAL ---")
tampilkan_tabel()

# Loop untuk menambahkan data baru dari user
while True:
    tambah = input("Apakah ingin menambahkan produk baru? (y/n): ").strip().lower()
    if tambah != 'y':
        break

    # Meminta input dari user
    id = input("Masukkan ID: ")
    nama = input("Masukkan Nama Produk: ")
    stok = int(input("Masukkan Stok: "))
    harga = float(input("Masukkan Harga: "))
    jenis = input("Masukkan Jenis: ")
    bahan = input("Masukkan Bahan: ")
    warna = input("Masukkan Warna: ")
    untuk = input("Produk untuk siapa? (Anjing/Kucing/Umum): ")
    size = input("Masukkan Size: ")
    merk = input("Masukkan Merk: ")

    # Menambahkan produk baru ke daftar
    daftar_produk.append(Baju(id, nama, stok, harga, jenis, bahan, warna, untuk, size, merk))

    # Menampilkan data terbaru
    tampilkan_tabel()

print("Program selesai!")
