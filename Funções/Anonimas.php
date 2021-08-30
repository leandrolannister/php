<?php

$name = function($nome){
    return $nome;
};

echo $name('Pedro') . PHP_EOL;
echo gettype($name); //$name é uma instância de function


