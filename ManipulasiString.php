<?php

//penggabungan string
$name = " Agung Kurniawan";

echo "Name : " . $name . PHP_EOL;
echo "Value : " . 99 . PHP_EOL;


// konversi ke number dan sebaliknya (konversi tipe data)
$valuestring = (string) 111;
var_dump($valuestring);

$valueint = (int) "111";
var_dump($valueint);

$valueFloat = (float) "1.11";
var_dump($valueFloat);

// mengakses karakter

$name = "agung";

echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;

// variable parsing
echo "Hello $name, Semoga Success belajarnya" . PHP_EOL;

// curly brace
$price = 11;
echo "Total harga {$price}K" . PHP_EOL;
