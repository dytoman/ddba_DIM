<?php
date_default_timezone_set("Asia/Jakarta");
if (!isset($_SESSION)) {
    session_start();
}


class DashboardController
{
    function callasset()
    {
        $baseController = new BaseController();
        $baseController->callasset();
    }
    function get_dasboard()
    {
        require "koneksi.php";
        $dashboard = mysqli_query($connect, "SELECT
        IDbarang,
        jumlahpenjualan - jumlahpembelian AS keuntungan,
        jumlahpembelian - jumlahpenjualan AS stok,
        jumlahpembelian,
        jumlahpenjualan 
    FROM
        barang b
        LEFT JOIN (
        SELECT
            idbarang,
            SUM( jumlahpembelian ) AS jumlahpembelian,
            SUM( cost ) AS cost 
        FROM
            (
            SELECT
                idbarang,
                jumlahpembelian AS jumlahpembelian,
                jumlahpembelian * hargabeli AS cost 
            FROM
                jumlahpembelian
                INNER JOIN barang b ON idbarang = idbarang
            ) a 
        GROUP BY
            idbarang
        ) jumlahpembelian ON idbarang = idbarang
        LEFT JOIN (
        SELECT
            idbarang,
            SUM( jumlahpenjualan ) AS jumlahpenjualan,
            SUM( omset ) AS omset 
        FROM
            (
            SELECT
                idbarang,
                jumlahpenjualan AS jumlahpenjualan,
                jumlahpenjualan * hargajual AS omset 
            FROM
            jumlahpenjualan
                INNER JOIN barang b ON idbarang = idbarang 
            ) a 
        GROUP BY
            idbarang 
        ) jumlahpenjualan ON idbarang = idbarang 
    GROUP BY
        idbarang;
    ;");
        return $dashboard;
    }
}