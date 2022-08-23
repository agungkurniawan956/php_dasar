<?php

function sayhello(string $name, callable $filter)
{
  $finalname = call_user_func($filter, $name);
  echo "Hello $finalname" . PHP_EOL;
}

sayhello("Agung", "strtoupper");
sayhello("Agung", fn ($name) => strtolower($name));
sayhello("Agung", function (string $name) {
  return strtoupper($name);
});
