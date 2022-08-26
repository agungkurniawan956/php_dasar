<?php

// Assign by Reference
$name = "Agung";

$changename = &$name;
$changename = "Kurniawan";

echo $changename . PHP_EOL;


// pass by reverence
function increment(int &$value)
{
  $value++;
}

$count = 1;
increment($count);
increment($count);

echo $count . PHP_EOL;

// returning Reference
function &getvalue()
{
  static $value = 99;
  return $value;
}

$a = &getvalue();
$a = 399;

$b = &getvalue();
echo $b . PHP_EOL;
