<?php 
//Sem o namespace não poderiamos usar uma função com nome count
namespace xuras;
function count(){
	return "b";
}

$nomes = ['a'];
echo count($nomes);