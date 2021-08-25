<?php

$name = 'Leandro';

function changeName($n){
    global $name;
    $name = $n;
}


changeName('Soares');
echo $name;