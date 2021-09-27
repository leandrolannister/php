<?php 

// Se achar retorna 1 se não 0
// i -> Ignora casesensitive

$str = 'Leandro cat';
$regexp = "/cat/i";

if(preg_match($regexp, $str)):
    echo "Achou";
endif;