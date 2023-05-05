<?php 
  class Pengguna {
    private $db;

    private $IdPengguna;
    private $IdAkses; // Foreign Key
    private $NamaPengguna;
    private $Password;
    private $NamaDepan;
    private $NamaBelakang;
    private $NoHP;
    private $Alamat;

    public function __construct(\PDO $db) {
      $this->db = $db;
    }

    public function getIdPengguna() {
      return $this->IdPengguna;
    }

    public function setIdPengguna($IdPengguna) {
      $this->IdPengguna = $IdPengguna;
    }

    public function getIdAkses() {
      return $this->IdAkses;
    }

    public function setIdAkses($IdAkses) {
      $this->IdAkses = $IdAkses;
    }

    public function getNamaPengguna() {
      return $this->NamaPengguna;
    }

    public function setNamaPengguna($NamaPengguna) {
      $this->NamaPengguna = $NamaPengguna;
    }

    public function getPassword() {
      return $this->Password;
    }

    public function setPassword($Password) {
      $this->Password = $Password;
    }

    public function getNamaDepan() {
      return $this->NamaDepan;
    }

    public function setNamaDepan($NamaDepan) {
      $this->NamaDepan = $NamaDepan;
    }

    public function getNamaBelakang() {
      return $this->NamaBelakang;
    }

    public function setNamaBelakang($NamaBelakang) {
      $this->NamaBelakang = $NamaBelakang;
    }

    public function getNoHP() {
      return $this->NoHP;
    }

    public function setNoHP($NoHP) {
      $this->NoHP = $NoHP;
    }

    public function getAlamat() {
      return $this->Alamat;
    }

    public function setAlamat($Alamat) {
      $this->Alamat = $Alamat;
    }

    // CRUD Controllers Here...
  }
?>