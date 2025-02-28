#include <bits/stdc++.h>
#include "Aksesoris.cpp"
using namespace std;

class Baju : public Aksesoris {
    private:
        string untuk;
        string size;
        string merk;
    
    public:

        Baju(string id, string nama, int stok, double harga, string jenis, string bahan, string warna, 
             string untuk, string size, string merk) 
            : Aksesoris(id, nama, stok, harga, jenis, bahan, warna) { // Panggil constructor parent
            this->untuk = untuk;
            this->size = size;
            this->merk = merk;
        }

        // Getter dan Setter
        string getUntuk() const { return untuk; }
        void setUntuk(string untuk) { this->untuk = untuk; }
    
        string getSize() const { return size; }
        void setSize(string size) { this->size = size; }
    
        string getMerk() const { return merk; }
        void setMerk(string merk) { this->merk = merk; }

        void displayInfo() {
            cout << "=======================================" << endl;
            cout << "ID      : " << getId() << endl;
            cout << "Nama    : " << getNama() << endl;
            cout << "Stok    : " << getStok() << endl;
            cout << "Harga   : " << getHarga() << endl;
            cout << "Jenis   : " << getJenis() << endl;
            cout << "Bahan   : " << getBahan() << endl;
            cout << "Warna   : " << getWarna() << endl;
            cout << "Untuk   : " << untuk << endl;
            cout << "Size    : " << size << endl;
            cout << "Merk    : " << merk << endl;
            cout << "=======================================" << endl;
        }
};
