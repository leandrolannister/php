<?php 

$name = 'Leandro';

function add(&$name){
  $name .= " Soares";
}

add($name);

echo $name;