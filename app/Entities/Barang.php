<?php 
  namespace App\Entities;

  use CodeIgniter\Entity\Entity;

  class Barang extends Entity {
    protected $attributes = [
      'id_barang' => null,
      'nama_barang' => null,
      'keterangan' => null,
      'satuan' => null,
      'id_pengguna' => null
    ];
  }
?>