<?php
$a = 1;
while ($a <= 10) {
  echo "Ini adalah Contoh While Loop ke - $a" . PHP_EOL;
  $a++;
}

while ($a >= 1) :
  echo "Ini adalah Contoh While Loop ke - $a" . PHP_EOL;
  $a--;
endwhile;
