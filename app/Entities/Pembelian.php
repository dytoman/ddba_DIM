<?php 
  namespace App\Entities;

  use CodeIgniter\Entity\Entity;

  class Pembelian extends Entity {
    protected $attributes = [
      'id_pembelian' => null,
      'id_barang' => null,
      'id_supplier' => null,
      'jumlah_pembelian' => null,
      'harga_beli' => null
    ];
  }
?>