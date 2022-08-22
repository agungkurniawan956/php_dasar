<?php

// function Argument
function sayhello($name)
{
  echo "Hi, $name" . PHP_EOL;
}

sayhello("Agung");
sayhello("Lasbi");

// Default Argument Value
function sayhi($name = "Selamat ", $second = "Datang")
{
  echo "Hi, $name $second" . PHP_EOL;
}

sayhi("");

// function Declaration

function sum(int $first, int $second)
{
  $total = $first + $second;
  echo " Total $first + $second = $total" . PHP_EOL;
}

sum("15", "15");
sum(25, 25);
sum(true, false);

//Variable-length Argument list
$values = [1, 2, 3, 4, 5];

function sumAll(...$values)
{
  $total = 0;
  foreach ($values as $value) {
    $total += $value;
  }
  echo "Total " . implode(" + ", $values) . "= $total" . PHP_EOL;
}

sumAll(1, 3, 5, 7, 9);
sumAll(...$values);
