<?php

// loop tanpa henti/ tanpa kondisi
// for (;;) {
//   echo "Ini contoh looping tanpa henti" . PHP_EOL;
// }

// loop dengan kondisi
$i = 0;
for (; $i <= 11;) {
  echo "Ini Contoh Looping Dengan kondisi ke-$i" . PHP_EOL;
  $i++;
}

// loop dengan init statement
for ($i = 1; $i <= 11;) {
  echo "Ini Contoh Looping Dengan init statement dan kondisi ke-$i" . PHP_EOL;
  $i++;
}


// loop dengan post statement
for ($i = 10; $i >= 1; $i--) {
  echo "ini Contoh For loop Dengan init Statement, Kondisi Dan post Statement ke - $i" . PHP_EOL;
}

// loop alternatif
for ($i = 10; $i >= 1; $i--) :
  echo "ini Contoh For loop Menggunakan  init Statement, Kondisi Dan post Statement dengan cara alternantif ke - $i" . PHP_EOL;
endfor;
