<?php 
  namespace App\Entities;

  use CodeIgniter\Entity\Entity;

  class Pelanggan extends Entity {
    protected $idPelanggan;
    protected $namaPelanggan;
    protected $noHp;
    protected $alamat;

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