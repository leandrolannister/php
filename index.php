<?php

$secondName = 'Soares';
$thirdName = 'Ribeiro';

$msg = function($firstName) use ($secondName, $thirdName){
    echo "olá $firstName $secondName $thirdName, seja bem vindo";
};

echo $msg('Leandro');