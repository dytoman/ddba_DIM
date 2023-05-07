<?php

class PembelianController
{
    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function createPembelian($IdSupplier, $IdBarang, $JumlahPembelian, $HargaBeli)
    {
        $query = "INSERT INTO pembelian (IdSupplier, IdBarang, JumlahPembelian, HargaBeli) VALUES (:IdSupplier, :IdBarang, :JumlahPembelian, :HargaBeli)";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(":IdSupplier", $IdSupplier);
        $stmt->bindParam(":IdBarang", $IdBarang);
        $stmt->bindParam(":JumlahPembelian", $JumlahPembelian);
        $stmt->bindParam(":HargaBeli", $HargaBeli);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function readPembelian($IdPembelian)
    {
        $query = "SELECT * FROM pembelian WHERE IdPembelian=:IdPembelian";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(":IdPembelian", $IdPembelian);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function updatePembelian($IdPembelian, $IdSupplier, $IdBarang, $JumlahPembelian, $HargaBeli)
    {
        $query = "UPDATE pembelian SET IdSupplier=:IdSupplier, IdBarang=:IdBarang, JumlahPembelian=:JumlahPembelian, HargaBeli=:HargaBeli WHERE IdPembelian=:IdPembelian";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(":IdSupplier", $IdSupplier);
        $stmt->bindParam(":IdBarang", $IdBarang);
        $stmt->bindParam(":JumlahPembelian", $JumlahPembelian);
        $stmt->bindParam(":HargaBeli", $HargaBeli);
        $stmt->bindParam(":IdPembelian", $IdPembelian);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deletePembelian($IdPembelian)
    {
        $query = "DELETE FROM pembelian WHERE IdPembelian=:IdPembelian";
        $stmt = $this->db->prepare($query);

        $stmt->bindParam(":IdPembelian", $IdPembelian);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

?>
