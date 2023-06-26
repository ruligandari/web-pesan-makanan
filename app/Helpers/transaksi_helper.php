<?php

namespace App\Helpers;

function generateNoTransaksi($tahun){
    $nomorTerakhir = 1;
    $nomortransaksi = sprintf("%03d", $nomorTerakhir);
    $nomortransaksi .= "/KRAB18/".$tahun;
    return $nomortransaksi;
}