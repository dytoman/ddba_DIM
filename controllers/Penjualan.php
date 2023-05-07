<?php
class PenjualanController {
  private $db;

  public function __construct(\PDO $db) {
    $this->db = $db;
  }

  // Create new penjualan
  public function createPenjualan($IdPelanggan, $IdBarang, $JumlahPenjualan, $HargaJual) {
    // Prepare statement
    $stmt = $this->db->prepare("
      INSERT INTO penjualan (IdPelanggan, IdBarang, JumlahPenjualan, HargaJual)
      VALUES (:IdPelanggan, :IdBarang, :JumlahPenjualan, :HargaJual)
    ");

    // Bind parameters
    $stmt->bindParam(':IdPelanggan', $IdPelanggan);
    $stmt->bindParam(':IdBarang', $IdBarang);
    $stmt->bindParam(':JumlahPenjualan', $JumlahPenjualan);
    $stmt->bindParam(':HargaJual', $HargaJual);

    // Execute statement
    return $stmt->execute();
  }

  // Update penjualan
  public function updatePenjualan($IdPenjualan, $IdPelanggan, $IdBarang, $JumlahPenjualan, $HargaJual) {
    // Prepare statement
    $stmt = $this->db->prepare("
      UPDATE penjualan
      SET IdPelanggan = :IdPelanggan, IdBarang = :IdBarang, JumlahPenjualan = :JumlahPenjualan, HargaJual = :HargaJual
      WHERE IdPenjualan = :IdPenjualan
    ");

    // Bind parameters
    $stmt->bindParam(':IdPenjualan', $IdPenjualan);
    $stmt->bindParam(':IdPelanggan', $IdPelanggan);
    $stmt->bindParam(':IdBarang', $IdBarang);
    $stmt->bindParam(':JumlahPenjualan', $JumlahPenjualan);
    $stmt->bindParam(':HargaJual', $HargaJual);

    // Execute statement
    return $stmt->execute();
  }

  // Delete penjualan
  public function deletePenjualan($IdPenjualan) {
    // Prepare statement
    $stmt = $this->db->prepare("
      DELETE FROM penjualan WHERE IdPenjualan = :IdPenjualan
    ");

    // Bind parameter
    $stmt->bindParam(':IdPenjualan', $IdPenjualan);

    // Execute statement
    return $stmt->execute();
  }
}
?>
