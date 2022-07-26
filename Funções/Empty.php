<?php 

if (empty($a))
  echo "Não existe: Empty é true" . PHP_EOL;

$a;
if (empty($a))
  echo "Variável apenas decladara: Empty é true" . PHP_EOL;  

$a = null;
if (empty($a))
  echo "Variável null:Empty é true" . PHP_EOL;  

$a = false; // "0" or 0
if (empty($a))
  echo "Variável false:Empty é true" . PHP_EOL;    

