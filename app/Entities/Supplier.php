<?php 
  namespace App\Entities;

  use CodeIgniter\Entity\Entity;

  class Supplier extends Entity {
    protected $idSupplier;
    protected $namaSupplier;
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