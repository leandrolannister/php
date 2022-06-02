<?php 

// Multibyte

$str = "integração";

echo strlen($str) . PHP_EOL; //Não conta o numero de strings em função dos acentos
echo mb_strlen($str) . PHP_EOL; //Corrigi essa falha

echo strtoupper($str) . PHP_EOL;
echo strtoupper($str); //Corrigi letras maíusculas