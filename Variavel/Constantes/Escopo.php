<?php

//Constantes possuem o escopo Global

define('NOME', 'leandro', true);

function getNome(){
	return NOME;
}

echo getNome();