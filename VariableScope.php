<?php

$name = "Agung"; // ini Adalah Variable global scope tidak bisa di panggil di dalam function

function call()
{
  echo $name . PHP_EOL; // ini contoh error 
}

call();

function hi()
{
  global $name; // Gunakan Kata kunci global untuk mengakses Variable global
  echo "Hi, $name" . PHP_EOL;

  echo $GLOBALS["name"] . PHP_EOL; // atau gunakan keyword $GLOBAL lalu masukan nama variable nya
}
hi();
