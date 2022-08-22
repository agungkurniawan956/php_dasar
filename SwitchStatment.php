<?php

$nilai = "1";

switch ($nilai) {
  case 'A':
    echo " Selamat Anda Lulus Dengan Nilai sangat Baik" . PHP_EOL;
    break;
  case 'B':
  case 'C':
    echo "Selamat Anda Lulus Dengan Nilai baik" . PHP_EOL;
    break;
  case 'D':
    echo "Maa Anda Belum Lulus" . PHP_EOL;
    break;
  default:
    echo "Anda Belum Terdaftar" . PHP_EOL;
    break;
}

// Syntax Alternatif
switch ($nilai):
  case 'A':
    echo " Selamat Anda Lulus Dengan Nilai sangat Baik" . PHP_EOL;
    break;
  case 'B':
  case 'C':
    echo "Selamat Anda Lulus Dengan Nilai baik" . PHP_EOL;
    break;
  case 'D':
    echo "Maa Anda Belum Lulus" . PHP_EOL;
    break;
  default:
    echo "Anda Belum Terdaftar" . PHP_EOL;
    break;
endswitch;
