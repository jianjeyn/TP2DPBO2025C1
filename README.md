# TP2DPBO2025C1

## Janji
Saya Jihan Aqilah Hartono dengan NIM 2306827 mengerjakan Tugas Praktikum 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Dokumentasi
### PHP
![image](https://github.com/user-attachments/assets/86a8871e-3b6c-453b-93c7-b352dd79a906)
![image](https://github.com/user-attachments/assets/ab900288-634b-4f13-8f1c-1005df410079)

### CPP
![image](https://github.com/user-attachments/assets/10582aa0-8d1a-4340-92fb-f11aaf8edefe)

### Java
![image](https://github.com/user-attachments/assets/a0b13e35-50e6-4115-bb17-23edc2799c28)

### Python
![image](https://github.com/user-attachments/assets/9d62c68a-c474-49ac-9a30-aaa32e45f0e2)

## Alur Program
Program ini memungkinkan pengguna untuk melihat data produk yang sudah ada, menambah produk baru, dan menampilkan data produk dalam bentuk tabel.

Program dimulai dengan inisialisasi lima produk awal yang dimasukkan ke dalam daftarProduk. Data produk yang ada kemudian ditampilkan dalam bentuk tabel yang terstruktur dengan rapi. Selanjutnya, program memasuki loop input pengguna, di mana pengguna diminta untuk memasukkan data produk baru. Setelah itu, produk baru ditambahkan ke dalam daftarProduk dan tabel diperbarui untuk menampilkan produk yang baru saja dimasukkan. Proses ini dapat diulang, memungkinkan pengguna untuk menambah lebih banyak produk jika diinginkan. Program akan berhenti ketika pengguna memilih untuk tidak menambah produk lagi, menandakan bahwa program telah selesai.

## Diagram
![image](https://github.com/user-attachments/assets/848c64f0-a27f-4bbc-91db-9a1cebb0ad72)

## Desain Program
Desain class diagram ini menggambarkan hubungan inheritance antara tiga kelas: Petshop, Aksesoris, dan Baju. Petshop adalah kelas dasar yang menyimpan atribut umum untuk produk petshop yaitu id, nama, harga, dan stok, serta menyediakan getter dan setter untuk mengakses atribut tersebut. Aksesoris adalah kelas turunan dari Petshop atau anak yang menambahkan atribut khusus untuk produk aksesoris yaitu jenis, bahan, dan warna. Selanjutnya, Baju sebagai turunan dari Aksesoris menambahkan atribut spesifik terkait pakaian, yaitu untuk siapa barang tersebut, size, dan juga merk, sehingga membentuk hierarki yang memungkinkan pengelolaan data produk petshop.
