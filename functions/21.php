<?php

$makefoo = true;

bar();

if ($makefoo) {
  function foo()
  {
    echo "We don't exist until you find us.\n";
  }
}


if ($makefoo) foo();

function bar() 
{
  echo "Eventer exists if you work with us!\n";
}

?>