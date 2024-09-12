<?php

require 'vendor/autoload.php';

use Nasution\Terbilang\Terbilang;
use Satyakresna\Masehi\Masehi;

// Menggunakan library nasution/terbilang
$terbilang = new Terbilang();
echo $terbilang->convert(123456);

// Menggunakan library satyakresna/masehi
$masehi = new Masehi();
echo $masehi->tanggalSekarang();

?>