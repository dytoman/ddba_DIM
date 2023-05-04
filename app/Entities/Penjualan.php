<?php 
  namespace App\Entities;

  use CodeIgniter\Entity\Entity;

  class Penjualan extends Entity {
    protected $idPenjualan;
    protected $idPelanggan;
    protected $idBarang;
    protected $jumlahPenjualan;
    protected $hargaJual;

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