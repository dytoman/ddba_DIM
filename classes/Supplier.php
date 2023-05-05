<?php 
  class Supplier {
    private $db;

    private $IdSupplier;
    private $NamaSupplier;
    private $Alamat;
    private $NoHP;

    public function __construct(\PDO $db) {
      $this->db = $db;
    }

    public function getIdSupplier() {
      return $this->IdSupplier;
    }

    public function setIdSupplier($IdSupplier) {
      $this->IdSupplier = $IdSupplier;
    }

    public function getNamaSupplier() {
      return $this->NamaSupplier;
    }

    public function setNamaSupplier($NamaSupplier) {
      $this->NamaSupplier = $NamaSupplier;
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