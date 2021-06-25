<?php

class Pessoa{
    const IDADE = 30;


	public function getIdade(){
		return self::IDADE;
	}
}

$p = new Pessoa();
echo $p->getIdade();



