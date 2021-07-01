<?php 
/*
  Lembrando que originalmente o PHP é uma linguagem fracamente tipada, característica que
  contribuiu em sua popularização. Em modo fraco (weak mode) os tipos de dados são convertidosautomaticamente seguindo as regras de conversão das versões anteriores do PHP. Em modo rigoroso (strict mode) os tipos de dados devem ser obedecidos e requer que seja habilitado arquivo por arquivo.
  Lembre-se que usar o modo strict gera um ganho significativo de performance, mas requer maior disciplina do programador para passar e receber adequadamente os tipos de dados
*/
   
declare(strict_types=1);

function obtemInteiro($input): int {
	return $input;
}

$conteudo = 7.5;

echo var_dump(obtemInteiro($conteudo));