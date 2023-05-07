<?php
class PelangganController {
  private $db;

  public function __construct(\PDO $db) {
    $this->db = $db;
  }

  // Create new pelanggan
  public function createPelanggan($namaPelanggan, $alamat, $noHp) {
    // Prepare statement
    $stmt = $this->db->prepare("
      INSERT INTO pelanggan (nama_pelanggan, alamat, no_hp)
      VALUES (:namaPelanggan, :alamat, :noHp)
    ");

    // Bind parameters
    $stmt->bindParam(':namaPelanggan', $namaPelanggan);
    $stmt->bindParam(':alamat', $alamat);
    $stmt->bindParam(':noHp', $noHp);

    // Execute statement
    return $stmt->execute();
  }

  // Read pelanggan by ID
  public function getPelangganById($idPelanggan) {
    // Prepare statement
    $stmt = $this->db->prepare("
      SELECT * FROM pelanggan WHERE id_pelanggan = :idPelanggan
    ");

    // Bind parameter
    $stmt->bindParam(':idPelanggan', $idPelanggan);

    // Execute statement
    if ($stmt->execute()) {
      // Fetch pelanggan data
      $pelanggan = $stmt->fetch(\PDO::FETCH_ASSOC);
      
      return $pelanggan;
    } else {
      return false;
    }
  }

  // Update pelanggan
  public function updatePelanggan($idPelanggan, $namaPelanggan, $alamat, $noHp) {
    // Prepare statement
    $stmt = $this->db->prepare("
      UPDATE pelanggan
      SET nama_pelanggan = :namaPelanggan, alamat = :alamat, no_hp = :noHp
      WHERE id_pelanggan = :idPelanggan
    ");

    // Bind parameters
    $stmt->bindParam(':idPelanggan', $idPelanggan);
    $stmt->bindParam(':namaPelanggan', $namaPelanggan);
    $stmt->bindParam(':alamat', $alamat);
    $stmt->bindParam(':noHp', $noHp);

    // Execute statement
    return $stmt->execute();
  }

  // Delete pelanggan
  public function deletePelanggan($idPelanggan) {
    // Prepare statement
    $stmt = $this->db->prepare("
      DELETE FROM pelanggan WHERE id_pelanggan = :idPelanggan
    ");

    // Bind parameter
    $stmt->bindParam(':idPelanggan', $idPelanggan);

    // Execute statement
    return $stmt->execute();
  }
}
?>
