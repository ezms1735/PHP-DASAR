<?php

function writeMsg($nama) {
    echo "Selamat datang " . $nama . " <br>";
}
writeMsg("Ahmad");

function tambah(int $angka1, int $angka2) {
    $a = $angka1 + $angka2;
    return $a; 
}
$hasil = tambah(5,5);
echo ($hasil);

?>