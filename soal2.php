<?php
    $jumlahUang = 1387500;
    $pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);
    $jumlahPecahan = array();

    foreach ($pecahan as $nilai) {
        $jumlahPecahan[$nilai] = floor($jumlahUang / $nilai);
        $jumlahUang %= $nilai;
    }

    foreach ($jumlahPecahan as $nilai => $jumlah) {
        echo "Jumlah uang pecahan Rp. " . number_format($nilai, 0, ',', '.') . " adalah " . $jumlah . " lembar <br>" . PHP_EOL;
    }
?>