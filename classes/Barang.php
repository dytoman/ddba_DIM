<?php 
  class Barang {
    private $db;

    private $IdBarang;
    private $IdPengguna; // Foreign Key
    private $NamaBarang;
    private $Keterangan;
    private $Satuan;

    public function __construct(\PDO $db) {
      $this->db = $db;
    }

    public function getIdBarang() {
      return $this->IdBarang;
    }

    public function setIdBarang($IdBarang) {
      $this->IdBarang = $IdBarang;
    }

    public function getIdPengguna() {
      return $this->IdPengguna;
    }

    public function setIdPengguna($IdPengguna) {
      $this->IdPengguna = $IdPengguna;
    }

    public function getNamaBarang() {
      return $this->NamaBarang;
    }

    public function setNamaBarang($NamaBarang) {
      $this->NamaBarang = $NamaBarang;
    }

    public function getKeterangan() {
      return $this->Keterangan;
    }

    public function setKeterangan($Keterangan) {
      $this->Keterangan = $Keterangan;
    }

    public function getSatuan() {
      return $this->Satuan;
    }

    public function setSatuan($Satuan) {
      $this->Satuan = $Satuan;
    }

    // CRUD Controllers Here...
  }
?>