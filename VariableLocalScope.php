<?php

function callname()
{
  $name = "Agung" . PHP_EOL; // ini Adalah contoh Variable local scope
}

callname();
echo $name;
