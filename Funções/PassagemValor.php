<?php

//Passagem por referência indicada pelo &
//Sem o & a passagem é por valor(mais comum)
$know = 'Java';

function change(&$know){
    $know = "NodeJs";
}

change($know);
echo $know;