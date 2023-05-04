<?php 
  namespace App\Entities;

  use CodeIgniter\Entity\Entity;

  class Barang extends Entity {
    protected $idBarang;
    protected $namaBarang;
    protected $keterangan;
    protected $satuan;
    protected $idPengguna;

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