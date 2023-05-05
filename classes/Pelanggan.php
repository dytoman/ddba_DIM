<?php 
  class Pelanggan {
    private $db;

    private $IdPelanggan;
    private $NamaPelanggan;
    private $Alamat;
    private $NoHP;

    public function __construct(\PDO $db) {
      $this->db = $db;
    }

    public function getIdPelanggan() {
      return $this->IdPelanggan;
    }

    public function setIdPelanggan($IdPelanggan) {
      $this->IdPelanggan = $IdPelanggan;
    }

    public function getNamaPelanggan() {
      return $this->NamaPelanggan;
    }

    public function setNamaPelanggan($NamaPelanggan) {
      $this->NamaPelanggan = $NamaPelanggan;
    }

    public function getAlamat() {
      return $this->Alamat;
    }

    public function setAlamat($Alamat) {
      $this->Alamat = $Alamat;
    }

    public function getNoHP() {
      return $this->NoHP;
    }

    public function setNoHP($NoHP) {
      $this->NoHP = $NoHP;
    }

    // CRUD Controllers Here...
  }
?>