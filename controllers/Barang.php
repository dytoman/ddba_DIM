<?php

class BarangController {
    private $db;

    public function __construct(\PDO $db) {
        $this->db = $db;
    }

    public function createBarang($IdPengguna, $NamaBarang, $Keterangan, $Satuan) {
        $query = "INSERT INTO barang (id_pengguna, nama_barang, keterangan, satuan) VALUES (:id_pengguna, :nama_barang, :keterangan, :satuan)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id_pengguna', $IdPengguna);
        $stmt->bindParam(':nama_barang', $NamaBarang);
        $stmt->bindParam(':keterangan', $Keterangan);
        $stmt->bindParam(':satuan', $Satuan);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

?>
