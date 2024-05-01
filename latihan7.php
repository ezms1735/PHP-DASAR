<?php

$namaBuah = array ("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");
echo "saya suka" . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[5] . ".";

echo " saya suka " . $namaBuah[0];
echo " saya suka " . $namaBuah[1];
echo " saya suka " . $namaBuah[4];
echo " saya suka " . $namaBuah[5];

$umur = array("Andi"=>"35 Tahun", "Ben"=>"37 Tahun", "Joe"=>"39 Tahun");
$umur['Ahmad']="50 Tahun";
echo "<br> Umur Andi adalah " . $umur['Andi'] . "<br>";

foreach ($umur as $nama => $usia){
    echo "Umur $nama adalah $usia <br>";
}

?>