<?php 
  namespace App\Entities;

  use CodeIgniter\Entity\Entity;

  class Pembelian extends Entity {
    protected $idPembelian;
    protected $idBarang;
    protected $idSupplier;
    protected $jumlahPembelian;
    protected $hargaBeli;

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