<?php 
  namespace App\Entities;

  use CodeIgniter\Entity\Entity;

  class Supplier extends Entity {
    protected $attributes = [
      'id_supplier' => null,
      'nama_supplier' => null,
      'no_hp' => null,
      'alamat' => null
    ];
  }
?>