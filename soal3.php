<?php

$students = array(
    array("No Urut" => 1, "Poin" => 75, "Siswa" => "Adi"),
    array("No Urut" => 2, "Poin" => 80, "Siswa" => "Joni"),
    array("No Urut" => 3, "Poin" => 65, "Siswa" => "Jihan"),
    array("No Urut" => 4, "Poin" => 70, "Siswa" => "Aya"),
    array("No Urut" => 5, "Poin" => 85, "Siswa" => "Ita"),
    array("No Urut" => 6, "Poin" => 90, "Siswa" => "Budi"),
    array("No Urut" => 7, "Poin" => 95, "Siswa" => "Tini"),
    array("No Urut" => 8, "Poin" => 65, "Siswa" => "Sari")
);

echo "a) Poin siswa dengan nomor urut 5 : " . $students[4]["Poin"] . "<br>";

echo "b) Nama siswa dengan poin 90 : ";
$found90 = false;
foreach ($students as $student) {
    if ($student["Poin"] == 90) {
        echo $student["Siswa"] . ", ";
        $found90 = true;
    }
}
if (!$found90) {
    echo "tidak ada";
}
echo "<br>";

echo "c) Nama siswa dengan poin 100 : ";
$found100 = false;
foreach ($students as $student) {
    if ($student["Poin"] == 100) {
        echo $student["Siswa"] . ", ";
        $found100 = true;
    }
}
if (!$found100) {
    echo "tidak ada";
}

?>