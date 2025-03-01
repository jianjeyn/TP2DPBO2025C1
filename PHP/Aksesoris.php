<?php
// Mengimpor class Petshop
include 'Petshop.php';

class Aksesoris extends Petshop {
    // Atribut tambahan untuk Aksesoris
    private $jenis = '';
    private $bahan = '';
    private $warna = '';

    // Constructor
    public function __construct($id = '', $nama = '', $stok = 0, $harga = 0.0, $foto = '', $jenis = '', $bahan = '', $warna = '') {
        // Memanggil constructor parent (Petshop)
        parent::__construct($id, $nama, $stok, $harga, $foto);
        $this->jenis = $jenis;
        $this->bahan = $bahan;
        $this->warna = $warna;
    }

    // Setter dan Getter untuk Aksesoris
    public function setJenis($jenis) {
        $this->jenis = $jenis;
    }

    public function getJenis() {
        return $this->jenis;
    }

    public function setBahan($bahan) {
        $this->bahan = $bahan;
    }

    public function getBahan() {
        return $this->bahan;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function getWarna() {
        return $this->warna;
    }
}

?>
