#include <bits/stdc++.h>
#include "Baju.cpp" // Include Baju agar bisa digunakan
using namespace std;

int main() {
    // List untuk menyimpan data produk
    vector<Baju> daftarProduk = {
        Baju("B001", "Baju Anjing", 10, 100000, "Pakaian", "Katun", "Merah", "Anjing", "M", "DogWear"),
        Baju("B002", "Baju Kucing", 8, 95000, "Pakaian", "Wool", "Biru", "Kucing", "S", "CatStyle"),
        Baju("B003", "Jaket Anjing", 12, 120000, "Jaket", "Kulit", "Hitam", "Anjing", "L", "DogFashion"),
        Baju("B004", "Topi Kucing", 15, 45000, "Aksesoris", "Kanvas", "Pink", "Kucing", "M", "CatTrend"),
        Baju("B005", "Kaus Hewan", 9, 80000, "Pakaian", "Katun", "Hijau", "Umum", "M", "PetWear")
    };

    // Menampilkan Data Awal
    cout << "\n--- DATA AWAL ---" << endl;
    cout << "====================================================================================================================" << endl;
    cout << "| ID    | Nama Produk     | Stok  | Harga      | Jenis      | Bahan      | Warna      | Untuk   | Size  | Merk       |" << endl;
    cout << "====================================================================================================================" << endl;
    for (const Baju& produk : daftarProduk) {
        cout << "| " << setw(5) << left << produk.getId() << " | "
             << setw(15) << left << produk.getNama() << " | "
             << setw(5) << left << produk.getStok() << " | "
             << setw(10) << left << fixed << setprecision(2) << produk.getHarga() << " | "
             << setw(10) << left << produk.getJenis() << " | "
             << setw(10) << left << produk.getBahan() << " | "
             << setw(10) << left << produk.getWarna() << " | "
             << setw(7) << left << produk.getUntuk() << " | "
             << setw(5) << left << produk.getSize() << " | "
             << setw(10) << left << produk.getMerk() << " |" << endl;
    }
    cout << "====================================================================================================================\n" << endl;

    // Loop untuk menambahkan data baru dari user
    while (true) {
        string tambah;
        cout << "Apakah ingin menambahkan produk baru? (y/n): ";
        cin >> tambah;
        if (tambah != "y" && tambah != "Y") {
            break;
        }

        // Meminta input dari user
        string id, nama, jenis, bahan, warna, untuk, size, merk;
        int stok;
        double harga;

        cout << "Masukkan ID: ";
        cin >> id;
        cout << "Masukkan Nama Produk: ";
        cin.ignore(); // Menghindari masalah newline setelah cin
        getline(cin, nama);
        cout << "Masukkan Stok: ";
        cin >> stok;
        cout << "Masukkan Harga: ";
        cin >> harga;
        cout << "Masukkan Jenis: ";
        cin.ignore();
        getline(cin, jenis);
        cout << "Masukkan Bahan: ";
        getline(cin, bahan);
        cout << "Masukkan Warna: ";
        getline(cin, warna);
        cout << "Produk untuk siapa: ";
        getline(cin, untuk);
        cout << "Masukkan Size: ";
        getline(cin, size);
        cout << "Masukkan Merk: ";
        getline(cin, merk);

        // Menambahkan produk baru ke daftar
        daftarProduk.push_back(Baju(id, nama, stok, harga, jenis, bahan, warna, untuk, size, merk));

        // Menampilkan Data Setelah Penambahan
        cout << "\n--- DATA SETELAH PENAMBAHAN ---" << endl;
        cout << "====================================================================================================================" << endl;
        cout << "| ID    | Nama Produk     | Stok  | Harga      | Jenis      | Bahan      | Warna      | Untuk   | Size  | Merk       |" << endl;
        cout << "====================================================================================================================" << endl;
        for (const Baju& produk : daftarProduk) {
            cout << "| " << setw(5) << left << produk.getId() << " | "
                 << setw(15) << left << produk.getNama() << " | "
                 << setw(5) << left << produk.getStok() << " | "
                 << setw(10) << left << fixed << setprecision(2) << produk.getHarga() << " | "
                 << setw(10) << left << produk.getJenis() << " | "
                 << setw(10) << left << produk.getBahan() << " | "
                 << setw(10) << left << produk.getWarna() << " | "
                 << setw(7) << left << produk.getUntuk() << " | "
                 << setw(5) << left << produk.getSize() << " | "
                 << setw(10) << left << produk.getMerk() << " |" << endl;
        }
        cout << "====================================================================================================================\n" << endl;
    }

    cout << "Program selesai!" << endl;
    return 0;
}
