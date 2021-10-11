<?php

$nome = 'Leandro';

function change($n){
    global $nome;
    $nome = $n;
}

change('soares');

echo $nome;