<?php

//Passagem por referência indicada pelo &
//Sem o & a passagem é por valor(mais comum)
$name = 'Leandro';

function add(&$name){
  $name .= " Soares";
}

add($name);

echo $name;