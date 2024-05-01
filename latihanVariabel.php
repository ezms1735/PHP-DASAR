<?php

$nama_hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");

for ($i = 0; $i < count($nama_hari); $i++) {
    echo "Hari " . ($i + 1) . ": " . $nama_hari[$i] . "<br>";
}
?>
