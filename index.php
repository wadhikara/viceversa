<?php

require 'vendor/autoload.php';

use Masehi\Converter as MasehiConverter;

$masehi = new MasehiConverter;

echo MasehiConverter::convertDate(array(
    "date" => "now",
    "format" => "l, d M Y"
  ));
  echo "\n";
  # Output: Minggu, 02 Des 2018

echo terbilang(421);

echo "\n";

?>