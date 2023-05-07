<?php

class HakAksesController
{
    private $hakAkses;

    public function __construct(\PDO $db)
    {
        $this->hakAkses = new HakAkses($db);
    }

    public function createHakAkses($namaAkses, $keterangan)
    {
        $this->hakAkses->setNamaAkses($namaAkses);
        $this->hakAkses->setKeterangan($keterangan);

        if ($this->hakAkses->create()) {
            return "Hak akses berhasil dibuat.";
        } else {
            return "Gagal membuat hak akses.";
        }
    }
}

?>
