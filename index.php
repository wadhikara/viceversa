<?php

require 'vendor/autoload.php';

use Masehi\Converter as MasehiConverter;

// Inisialisasi Converter
$masehi = new MasehiConverter;

// Tampilkan tanggal saat ini
echo MasehiConverter::convertDate(array(
    "date" => "now",
    "format" => "l, d M Y"
));
echo "\n";

?>

<form method="POST">
    Masukan Angka: <input type="text" name="angka" />
    <input type="submit" value="Convert" />
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $angka = $_POST['angka'];
    echo terbilang(trim($angka));
}
?>
