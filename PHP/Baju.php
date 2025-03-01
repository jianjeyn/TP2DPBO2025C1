<?php

// Include Aksesoris.php untuk mewarisi kelas Aksesoris
include 'Aksesoris.php';

class Baju extends Aksesoris {
    private $untuk = '';
    private $size = '';
    private $merk = '';

    // constructor
    public function __construct($id = '', $nama = '', $stok = 0, $harga = 0.0, $foto = '', $jenis = '', $bahan = '', $warna = '', $untuk = '', $size = '', $merk = ''){
        // Memanggil constructor parent (Aksesoris)
        parent::__construct($id, $nama, $stok, $harga, $foto, $jenis, $bahan, $warna);
        $this->untuk = $untuk;
        $this->size = $size;
        $this->merk = $merk;
    }

    // setter and getter for untuk
    public function setUntuk($untuk){
        $this->untuk = $untuk;
    }

    public function getUntuk(){
        return $this->untuk;
    }

    // setter and getter for size
    public function setSize($size){
        $this->size = $size;
    }

    public function getSize(){
        return $this->size;
    }

    // setter and getter for merk
    public function setMerk($merk){
        $this->merk = $merk;
    }

    public function getMerk(){
        return $this->merk;
    }
}

?>
