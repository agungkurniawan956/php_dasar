<?php

// goto sederhana
goto a;
echo "Hello World";

a:
echo "Hello Metaverse" . PHP_EOL;

// goto Operator loop
$a = 1;
while (true) {
  echo "loop ini akan berhenti dengan GoTo - $a" . PHP_EOL;
  $a++;
  if ($a > 10) {
    goto end;
  }
}

end:
echo "End loop";
