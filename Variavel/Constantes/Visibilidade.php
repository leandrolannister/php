<?php 

class Produto{
	public const NOME = 'Mouse';
	protected const PRECO = 12.50;
}

$p = new Produto();
echo $p::NOME . PHP_EOL;
echo $p::PRECO;