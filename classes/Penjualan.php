<?php 
  class Penjualan {
    private $db;

    private $IdPenjualan;
    private $IdPelanggan; // Foreign Key
    private $IdBarang; // Foreign Key
    private $JumlahPenjualan;
    private $HargaJual;

    public function __construct(\PDO $db) {
      $this->db = $db;
    }

    public function getIdPenjualan() {
      return $this->IdPenjualan;
    }

    public function setIdPenjualan($IdPenjualan) {
      $this->IdPenjualan = $IdPenjualan;
    }

    public function getIdPelanggan() {
      return $this->IdPelanggan;
    }

    public function setIdPelanggan($IdPelanggan) {
      $this->IdPelanggan = $IdPelanggan;
    }

    public function getIdBarang() {
      return $this->IdBarang;
    }

    public function setIdBarang($IdBarang) {
      $this->IdBarang = $IdBarang;
    }

    public function getJumlahPenjualan() {
      return $this->JumlahPenjualan;
    }

    public function setJumlahPenjualan($JumlahPenjualan) {
      $this->JumlahPenjualan = $JumlahPenjualan;
    }

    public function getHargaJual() {
      return $this->HargaJual;
    }

    public function setHargaJual($HargaJual) {
      $this->HargaJual = $HargaJual;
    }

    // CRUD Controllers Here...
  }
?>