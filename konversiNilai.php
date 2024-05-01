<?php

function konversiNilai($nilai) {
  if ($nilai >= 90 && $nilai <= 100) {
    return "A";
  } else if ($nilai >= 80 && $nilai <= 89) {
    return "AB";
  } else if ($nilai >= 70 && $nilai <= 79) {
    return "B";
  } else if ($nilai >= 60 && $nilai <= 69) {
    return "BC";
  } else if ($nilai >= 0 && $nilai <= 59) {
    return "C";
  } else {
    return "Nilai tidak valid";
  }
}

if (isset($_POST['nilai'])) {
  $nilai = $_POST['nilai'];

  $hurufNilai = konversiNilai($nilai);

  echo "Nilai angka: $nilai<br>";
  echo "Nilai huruf: $hurufNilai";
} else {
  echo "<form method='post' action='konversiNilai.php'>";
  echo "<label for='nilai'>Masukkan nilai angka:</label>";
  echo "<input type='number' id='nilai' name='nilai' required>";
  echo "<input type='submit' value='Konversi'>";
  echo "</form>";
}

?>