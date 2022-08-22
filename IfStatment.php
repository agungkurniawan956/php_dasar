<?php
$nilai = 85;
$absen = 65;

// if statment
if ($nilai >= 80 && $absen >= 80) {
  echo "Selamat Anda Lulus" . PHP_EOL;
}

//else statment
if ($nilai >= 80 && $absen >= 80) {
  echo "selamat Anda Lulus";
} else {
  echo "Maaf Anda Belum Lulus" . PHP_EOL;
}

//else if statment
if ($nilai >= 80 && $absen >= 80) {
  echo "Selamat Anda Lulus, Dengan nilai A";
} elseif ($nilai >= 70 && $absen >= 70) {
  echo "Selamat Anda Lulus, Dengan nilai B" . PHP_EOL;
} elseif ($nilai >= 60 && $absen >= 60) {
  echo "Selamat Anda Lulus, Dengan nilai C" . PHP_EOL;
} elseif ($nilai >= 50 && $absen >= 50) {
  echo "Maaf Anda Belum Lulus, nilai Anda D" . PHP_EOL;
} else {
  echo "Maaf Anda Belum Lulus, nilai Anda D" . PHP_EOL;
}

// syntax alternatif
if ($nilai >= 80 && $absen >= 80) :
  echo "Selamat Anda Lulus, Dengan nilai A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70) :
  echo "Selamat Anda Lulus, Dengan nilai B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >= 60) :
  echo "Selamat Anda Lulus, Dengan nilai C" . PHP_EOL;
elseif ($nilai >= 50 && $absen >= 50) :
  echo "Maaf Anda Belum Lulus, nilai Anda D" . PHP_EOL;
else :
  echo "Maaf Anda Belum Lulus, nilai Anda D" . PHP_EOL;
endif;
