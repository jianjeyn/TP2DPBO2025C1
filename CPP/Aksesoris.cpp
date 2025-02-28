#include <bits/stdc++.h>
#include "Petshop.cpp"
using namespace std;

class Aksesoris : public Petshop {
    private:
        string jenis;
        string bahan;
        string warna;
    
    public:
        // Constructor Default
        Aksesoris() : Petshop() {
            jenis = "";
            bahan = "";
            warna = "";
        }
    
        // Constructor dengan parameter
        Aksesoris(string id, string nama, int stok, double harga, string jenis, string bahan, string warna)
            : Petshop(id, nama, stok, harga) {
            this->jenis = jenis;
            this->bahan = bahan;
            this->warna = warna;
        }
    
        // Getter dan Setter
        string getJenis() const { return jenis; }
        void setJenis(string jenis) { this->jenis = jenis; }
    
        string getBahan() const { return bahan; }
        void setBahan(string bahan) { this->bahan = bahan; }
    
        string getWarna() const { return warna; }
        void setWarna(string warna) { this->warna = warna; }
    };