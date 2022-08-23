<?php

$sayhi = function (string $name) {
  echo "Hi, $name" . PHP_EOL;
};

$sayhi("Agung");

// anonymouse function sebagai argument
function saySeeyou(string $name, $filter)
{
  $finalname = $filter($name);
  echo "See You $finalname" . PHP_EOL;
}

saySeeyou("Agung", function (string $name): string {
  return strtoupper($name);
});


$filterfunction = function (string $name): string {
  return strtoupper($name);
};
saySeeyou("Agung", $filterfunction);


$first = "Agung";
$second = "kurniawan";

$sayhello = function () use ($first, $second) {
  echo "Hello $first $second" . PHP_EOL;
};

$sayhello();
