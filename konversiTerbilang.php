<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Terbilang</title>
</head>
<body>
    <h2>Konversi Angka ke Terbilang</h2>

    <form method="post">
        <label for="angka">Masukkan angka (1-10):</label>
        <input type="number" id="angka" name="angka" min="1" max="10" required>
        <button type="submit">Konversi</button>
    </form>

    <?php
        if (isset($_POST["angka"])) {
            $angka = $_POST["angka"];

            switch ($angka) {
                case 1:
                    $terbilang = "Satu";
                    break;
                case 2:
                    $terbilang = "Dua";
                    break;
                case 3:
                    $terbilang = "Tiga";
                    break;
                case 4:
                    $terbilang = "Empat";
                    break;
                case 5:
                    $terbilang = "Lima";
                    break;
                case 6:
                    $terbilang = "Enam";
                    break;
                case 7:
                    $terbilang = "Tujuh";
                    break;
                case 8:
                    $terbilang = "Delapan";
                    break;
                case 9:
                    $terbilang = "Sembilan";
                    break;
                case 10:
                    $terbilang = "Sepuluh";
                    break;
                default:
                    $terbilang = "Angka tidak valid";
            }

            echo "<p>Angka $angka dikonversi menjadi: $terbilang</p>";
        }
    ?>
</body>
</html>