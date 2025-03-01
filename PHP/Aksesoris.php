<?php

require_once 'Petshop.php';
class Aksesoris extends Petshop {
    private $jenis_aksesoris;
    private $bahan_aksesoris;
    private $warna_aksesoris;

    // Konstruktor default
    public function __construct($id = 0, $nama_produk = "", $harga_produk = 0, $stok_produk = 0, $gambar_produk = "", $jenis_aksesoris = "", $bahan_aksesoris = "", $warna_aksesoris = "") {
        parent::__construct($id, $nama_produk, $harga_produk, $stok_produk, $gambar_produk);
        $this->jenis_aksesoris = $jenis_aksesoris;
        $this->bahan_aksesoris = $bahan_aksesoris;
        $this->warna_aksesoris = $warna_aksesoris;
    }

    public function getJenisAksesoris() {
        return $this->jenis_aksesoris;
    }

    public function setJenisAksesoris($jenis_aksesoris) {
        $this->jenis_aksesoris = $jenis_aksesoris;
    }

    public function getBahanAksesoris() {
        return $this->bahan_aksesoris;
    }

    public function setBahanAksesoris($bahan_aksesoris) {
        $this->bahan_aksesoris = $bahan_aksesoris;
    }

    public function getWarnaAksesoris() {
        return $this->warna_aksesoris;
    }

    public function setWarnaAksesoris($warna_aksesoris) {
        $this->warna_aksesoris = $warna_aksesoris;
    }
}

?>
