<?php

$mensagem = "A V I S O";
$tipo = "IMPORTANTE";

$closure = function($colega) use ($mensagem, $tipo) {
   echo $mensagem. " " . $tipo . PHP_EOL ."Olá ".$colega;
};

$closure("Ari Junior");