<?php
// ini adalah function
function sayhello()
{
  echo "Hello Metaverse" . PHP_EOL;
};

sayhello();
sayhello();


// function didalam if
$hi = true;

if ($hi) {
  function say()
  {
    echo "Happy a good Day" . PHP_EOL;
  }
}

say();
say();
