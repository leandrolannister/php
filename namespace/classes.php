<?php 
//Foi possivel declarar pq ambas possuem um namespace
namespace lojafisica;
const EXPEDIENTE = 8;
class Cliente{
	function informacoes(){
		return EXPEDIENTE;
	}
}

namespace site;
const EXPEDIENTE = 24;
class Cliente{
	function informacoes(){
		return EXPEDIENTE;
	}
}

$c = new Cliente();
echo $c->informacoes();