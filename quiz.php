<?php
  $string = "PHP 7.1";
  $regexp = "/??/";

  preg_match_all($regexp, $string, $ocorrencias);
  print_r($ocorrencias);
?>

Qual dos seguintes meta-caracteres (sinalizados por ??) pode ser usado para pesq\
uisar qualquer caractere que não seja dígito decimal? 
A: \s
B: \S
C: \d
D: \D

*****************************************************************************************

Qual dos seguintes meta-caracteres (sinalizados por ??) pode ser usado para pe\
squisar qualquer caractere que não seja espaço em branco?
A: \s
B: \S
C: \d
D: \D