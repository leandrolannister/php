<?php 

class Pessoa{
	public $nome;
}

echo property_exists('Pessoa', 'nome');
echo property_exists('Pessoa', 'idade');
