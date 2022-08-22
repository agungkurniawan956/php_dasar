<?php

//Berikut Ini adalah operator Array +, ==, ===, !=, !==, <>,
$name = [
  "first" => "Agung",
  "second" => "Kurniawan"
];

$tanggal  = [
  "tgl" => 4,
  "bln" => "Agustus"
];

$tanggal2  = [
  "tgl" => 4,
  "bln" => "Agustus"
];

var_dump($tanggal2 <> $tanggal);
