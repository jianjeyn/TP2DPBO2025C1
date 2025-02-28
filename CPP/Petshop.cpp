#include <bits/stdc++.h>
using namespace std;

class Petshop {
private:
    string id;
    string nama;
    double harga;
    int stok;

public:
    // Constructor Default
    Petshop() {
        id = "";
        nama = "";
        harga = 0.0;
        stok = 0;
    }

    // Constructor dengan parameter
    Petshop(string id, string nama, int stok, double harga) {
        this->id = id;
        this->nama = nama;
        this->stok = stok;
        this->harga = harga;
    }

    // Getter dan Setter
    string getId() const { return id; }  
    void setId(string id) { this->id = id; }

    string getNama() const { return nama; }  
    void setNama(string nama) { this->nama = nama; }

    int getStok() const { return stok; }  
    void setStok(int stok) { this->stok = stok; }

    double getHarga() const { return harga; }  
    void setHarga(double harga) { this->harga = harga; }

};
