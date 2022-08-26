<?php


function increment()
{
  static $count = 1; // ini conotoh static scope delete keyword static agar tau perbedaannya

  echo "No $count" . PHP_EOL;

  $count++;
}

increment();
increment();
increment();
increment();
increment();
