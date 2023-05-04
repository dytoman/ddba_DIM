<?php 
  namespace App\Entities;

  use CodeIgniter\Entity\Entity;

  class HakAkses extends Entity {
    protected $attributes = [
      'id_akses' => null,
      'nama_akses' => null,
      'keterangan' => null
    ];
  }
?>