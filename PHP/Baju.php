<?php

require_once 'Aksesoris.php';

class Baju extends Aksesoris {
    private $size;
    private $merk;

    // Konstruktor default
    public function __construct($id = 0, $nama_produk = "", $harga_produk = 0, $stok_produk = 0, $jenis_aksesoris = "", $bahan_aksesoris = "", $warna_aksesoris = "", $size = 0, $merk = "") {
        parent::__construct($id, $nama_produk, $harga_produk, $stok_produk, $jenis_aksesoris, $bahan_aksesoris, $warna_aksesoris);
        $this->size = $size;
        $this->merk = $merk;
    }

    public function getSize() {
        return $this->size;
    }

    public function setSize($size) {
        $this->size = $size;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function setMerk($merk) {
        $this->merk = $merk;
    }
}

?>
