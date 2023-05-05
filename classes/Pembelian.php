<?php 
  class Pembelian {
    private $db;

    private $IdPembelian;
    private $IdSupplier; // Foreign Key
    private $IdBarang; // Foreign Key
    private $JumlahPembelian;
    private $HargaBeli;

    public function __construct(\PDO $db) {
      $this->db = $db;
    }

    public function getIdPembelian() {
      return $this->IdPembelian;
    }

    public function setIdPembelian($IdPembelian) {
      $this->IdPembelian = $IdPembelian;
    }

    public function getIdSupplier() {
      return $this->IdSupplier;
    }

    public function setIdSupplier($IdSupplier) {
      $this->IdSupplier = $IdSupplier;
    }

    public function getIdBarang() {
      return $this->IdBarang;
    }

    public function setIdBarang($IdBarang) {
      $this->IdBarang = $IdBarang;
    }

    public function getJumlahPembelian() {
      return $this->JumlahPembelian;
    }

    public function setJumlahPembelian($JumlahPembelian) {
      $this->JumlahPembelian = $JumlahPembelian;
    }

    public function getHargaBeli() {
      return $this->HargaBeli;
    }

    public function setHargaBeli($HargaBeli) {
      $this->HargaBeli = $HargaBeli;
    }

    // CRUD Controllers Here...
  }
?>