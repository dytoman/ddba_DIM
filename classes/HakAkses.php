<?php 
  class HakAkses {
    private $db;

    private $IdAkses;
    private $NamaAkses;
    private $Keterangan;

    public function __construct(\PDO $db) {
      $this->db = $db;
    }

    public function getIdAkses() {
      return $this->IdAkses;
    }

    public function setIdAkses($IdAkses) {
      $this->IdAkses = $IdAkses;
    }

    public function getNamaAkses() {
      return $this->NamaAkses;
    }

    public function setNamaAkses($NamaAkses) {
      $this->NamaAkses = $NamaAkses;
    }

    public function getKeterangan() {
      return $this->Keterangan;
    }

    public function setKeterangan($Keterangan) {
      $this->Keterangan = $Keterangan;
    }

    // CRUD Controllers Here...
  }
?>