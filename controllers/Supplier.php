<?php
class SupplierController {
  private $db;

  public function __construct(\PDO $db) {
    $this->db = $db;
  }

  // Create new supplier
  public function createSupplier($NamaSupplier, $Alamat, $NoHP) {
    // Prepare statement
    $stmt = $this->db->prepare("
      INSERT INTO supplier (NamaSupplier, Alamat, NoHP)
      VALUES (:NamaSupplier, :Alamat, :NoHP)
    ");

    // Bind parameters
    $stmt->bindParam(':NamaSupplier', $NamaSupplier);
    $stmt->bindParam(':Alamat', $Alamat);
    $stmt->bindParam(':NoHP', $NoHP);

    // Execute statement
    if ($stmt->execute()) {
      // Get ID of newly created supplier
      $IdSupplier = $this->db->lastInsertId();
      
      return $IdSupplier;
    } else {
      return false;
    }
  }

  // Read supplier by ID
  public function getSupplierById($IdSupplier) {
    // Prepare statement
    $stmt = $this->db->prepare("
      SELECT * FROM supplier WHERE IdSupplier = :IdSupplier
    ");

    // Bind parameter
    $stmt->bindParam(':IdSupplier', $IdSupplier);

    // Execute statement
    if ($stmt->execute()) {
      // Fetch supplier data
      $supplier = $stmt->fetch(\PDO::FETCH_ASSOC);
      
      return $supplier;
    } else {
      return false;
    }
  }

  // Update supplier
  public function updateSupplier($IdSupplier, $NamaSupplier, $Alamat, $NoHP) {
    // Prepare statement
    $stmt = $this->db->prepare("
      UPDATE supplier
      SET NamaSupplier = :NamaSupplier, Alamat = :Alamat, NoHP = :NoHP
      WHERE IdSupplier = :IdSupplier
    ");

    // Bind parameters
    $stmt->bindParam(':IdSupplier', $IdSupplier);
    $stmt->bindParam(':NamaSupplier', $NamaSupplier);
    $stmt->bindParam(':Alamat', $Alamat);
    $stmt->bindParam(':NoHP', $NoHP);

    // Execute statement
    return $stmt->execute();
  }

  // Delete supplier
  public function deleteSupplier($IdSupplier) {
    // Prepare statement
    $stmt = $this->db->prepare("
      DELETE FROM supplier WHERE IdSupplier = :IdSupplier
    ");

    // Bind parameter
    $stmt->bindParam(':IdSupplier', $IdSupplier);

    // Execute statement
    return $stmt->execute();
  }
}
?>
