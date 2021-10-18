<?php
// Passagem valor e referência
$a = 1;
$b = &$a; // & Vai receber sempre o valor referente a A. 
$c = $b;

$a = 2;

echo "A: " . $a . PHP_EOL;
echo "B: " . $b . PHP_EOL;
echo "C: " . $c . PHP_EOL;