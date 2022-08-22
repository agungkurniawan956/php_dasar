<?php

function hi()
{
  echo "Hi, Selamat Datang" . PHP_EOL;
}

$functionhi = "hi";
$functionhi();


// Penggunaan variable function
function hello(string $name, $filter)
{
  $acc = $filter($name);
  echo "Hello $acc" . PHP_EOL;
}

function selamat(string $name)
{
  return "Selamat Datang $name";
}

hello("Agung", "selamat");
hello("Agung", "strtoupper");
