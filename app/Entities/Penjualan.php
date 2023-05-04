<?php 
  namespace App\Entities;

  use CodeIgniter\Entity\Entity;

  class Penjualan extends Entity {
    protected $attributes = [
      'id_penjualan' => null,
      'id_pelanggan' => null,
      'id_barang' => null,
      'jumlah_penjualan' => null,
      'harga_jual' => null
    ];
  }
?>