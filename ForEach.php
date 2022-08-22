<?php

//pengaulangan tanpa for each
$names = ['Agung', 'Lasbi', 'Harist'];

for ($i = 0; $i < count($names); $i++) {
  echo "Data Siswa $names[$i]" . PHP_EOL;
}

// pengulangan array dengan for each
foreach ($names as $nam) {
  echo "Data Siswa $nam" . PHP_EOL;
}


$bio = [
  "first" => "Agung",
  "second" => "Harist",
  "third" => "Lasbi"
];

foreach ($bio as $key => $value) {
  echo "Nama : $value" . PHP_EOL;
}
