<?php
$a = 1;
while (true) {
  echo "loop ini akan berhenti menggunakan Break - $a" . PHP_EOL;
  $a++;
  if ($a > 10) {
    break;
  }
}
