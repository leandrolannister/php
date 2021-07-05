<?php 

// Interrogação na frente da especificação de tipo, 
// permite que o valor retornado seja null

eventualmente null. Ficaria assim:
Class Pessoa{
	public $nome;

	public function getNome(): ?string{
        return $this->nome;
	} 
}

$p = new Pessoa();
//$p->nome = 'Leandro';
echo $p->getNome();
