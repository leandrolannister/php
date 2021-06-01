<?php

$a = 1;
$b =& $a; //Recebe o endereço de memória.
$b = 2;

echo 'A' . $a . PHP_EOL;
echo 'B' . $b . PHP_EOL;