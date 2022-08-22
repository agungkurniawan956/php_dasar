<?php

for ($i = 0; $i < 100; $i++) {
  if ($i % 3 == 2) {
    continue;
  }
  echo "No = $i" . PHP_EOL;
}
