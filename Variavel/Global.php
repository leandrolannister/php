<?php

$nome = 'leandro';

function getNome(){
	global $nome;
	echo $nome;
}

getNome();
