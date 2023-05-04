<?php 
  namespace App\Entities;

  use CodeIgniter\Entity\Entity;

  class Pengguna extends Entity {
    protected $idPengguna;
    protected $namaPengguna;
    protected $password;
    protected $namaDepan;
    protected $namaBelakang;
    protected $noHp;
    protected $alamat;
    protected $idAkses;

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