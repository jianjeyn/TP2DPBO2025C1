<?php

class Petshop{
    // private attributes
    private $id = '';
    private $nama = '';
    private $harga = 0.0;
    private $stok = 0;
    private $foto = '';

    // constructor
    public function __construct($id = '', $nama = '', $stok = 0, $harga = 0.0, $foto = ''){
        $this->id = $id;
        $this->nama = $nama;
        $this->stok = $stok;
        $this->harga = $harga;
        $this->foto = $foto;
    }

    // setter and getter
    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setStok($stok){
        $this->stok = $stok;
    }

    public function getStok(){
        return $this->stok;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga;
    }

    public function setFoto($foto){
        $this->foto = $foto;
    }

    public function getFoto(){
        return $this->foto;
    }
}

?>
