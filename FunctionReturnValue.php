<?php

// Function Return value(1)
function sum(int $first, int $second): int
{
  $total = $first + $second;
  return $total;
}

$result = sum(15, 15);
var_dump($result);

// Function Return Value (2)
function  finalValue(int $value): string
{
  if ($value >= 81) {
    return "A";
  } elseif ($value >= 71) {
    return "B";
  } elseif ($value >= 61) {
    return "C";
  } elseif ($value >= 51) {
    return "D";
  } else {
    return "E";
  }
}

$value = 82;
var_dump(finalValue($value));

$rank = finalValue(42);
var_dump($rank);

// return type declaration
