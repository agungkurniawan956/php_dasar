<?php

$first = "Agung";
$last = "Kurniawan";

$anonymouseFunction = function () use ($first, $last) {
  return "Hello $first $last" . PHP_EOL;
};

$arrowFunction = fn () => "Hello $first $last" . PHP_EOL;

//echo $anonymouseFunction;
echo $arrowFunction;
