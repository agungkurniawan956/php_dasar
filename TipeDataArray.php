<?php

$kota = array("Bekasi", "Tangerang", "Kuningan", 4, 5.5);
$kodepos = [15713, 14758, 18918];

var_dump($kodepos);
var_dump($kota);

var_dump($kota[1]);

$kota[1] = "Banten";
var_dump($kota);

unset($kota[2]);
var_dump($kota);

$kota[] = "Jawa Barat";
var_dump($kota);

var_dump(count($kota));

// aray map-ing
$bio = array(
  "id" => "Agungk",
  "nama" => "Agung Kurniawan",
  "ttl" => "6,Agustus 1998"
);

var_dump($bio);
var_dump($bio["ttl"]);


// Aray dalam Array

$cv = [
  "id" => "Agungk",
  "nama" => "Agung Kurniawan",
  "alamat" => [
    "kota" => "Tangerang",
    "pov" => "Banten"
  ]
];
var_dump($cv);
var_dump($cv["alamat"]["pov"]);
