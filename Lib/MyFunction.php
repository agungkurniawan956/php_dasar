<?php

function sayhello(string $start, string $end)
{
  echo "Hello $start $end" . PHP_EOL;
}

function sum(int $first, int $second): int
{
  $total = $first + $second;
  return $total;
}
