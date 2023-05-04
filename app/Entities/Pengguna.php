<?php 
  namespace App\Entities;

  use CodeIgniter\Entity\Entity;

  class Pengguna extends Entity {
    protected $attributes = [
      'id_pengguna' => null,
      'nama_pengguna' => null,
      'password' => null,
      'nama_depan' => null,
      'nama_belakang' => null,
      'no_hp' => null,
      'alamat' => null,
      'id_akses' => null
    ];
  }
?>