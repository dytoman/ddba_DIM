<?php

class PenggunaController
{
    private $pengguna;

    public function __construct(\PDO $db)
    {
        $this->pengguna = new Pengguna($db);
    }

    public function tambahPengguna($idAkses, $namaPengguna, $password, $namaDepan, $namaBelakang, $noHP, $alamat)
    {
        $this->pengguna->setIdAkses($idAkses);
        $this->pengguna->setNamaPengguna($namaPengguna);
        $this->pengguna->setPassword($password);
        $this->pengguna->setNamaDepan($namaDepan);
        $this->pengguna->setNamaBelakang($namaBelakang);
        $this->pengguna->setNoHP($noHP);
        $this->pengguna->setAlamat($alamat);

        if ($this->pengguna->tambahPengguna()) {
            return "Pengguna berhasil ditambahkan.";
        } else {
            return "Gagal menambahkan pengguna.";
        }
    }
}

?>
