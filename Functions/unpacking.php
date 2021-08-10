<?php

function add($a, $b, $c){
    return $a + $b + $c + $d;
}

$elements = [2,3];

echo add(1, ...$elements);