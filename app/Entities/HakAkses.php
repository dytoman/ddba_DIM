<?php 
  namespace App\Entities;

  use CodeIgniter\Entity\Entity;

  class HakAkses extends Entity {
    protected $idAkses;
    protected $namaAkses;
    protected $keterangan;

    public function __get($property) {
      if (property_exists($this, $property)) {
        return $this->$property;
      }
    }

    public function __set($property, $value) {
      if (property_exists($this, $property)) {
        $this->$property = $value;
      }
    }
  }
?>