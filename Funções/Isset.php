<?php 

$a = "";

if (isset($a))
  echo "Variável com valor: Isset é true" . PHP_EOL;

$a = false; // "0" or 0
if (empty($a))
  echo "Variável false: Isset é true" . PHP_EOL;    

