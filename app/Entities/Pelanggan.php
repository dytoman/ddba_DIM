<?php 
  namespace App\Entities;

  use CodeIgniter\Entity\Entity;

  class Pelanggan extends Entity {
    protected $attributes = [
      'id_pelanggan' => null,
      'nama_pelanggan' => null,
      'no_hp' => null,
      'alamat' => null
    ];
  }
?>