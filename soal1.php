<?php
    $gajiPokok = 3250000;
    $tunjanganJabatan = 1200000;
    $pajak = 0.1;

    $gajiKotor = $gajiPokok + $tunjanganJabatan;
    $pajakPenghasilan = $gajiKotor * $pajak;
    $gajiBersih = $gajiKotor - $pajakPenghasilan;

    echo "Gaji bersih yang diterima Obi setiap bulannya adalah Rp. " . number_format($gajiBersih, 0, ',', '.') . ",-";
?>