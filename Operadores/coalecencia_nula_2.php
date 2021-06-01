<?php

//O ternário executa o código após os :
//A coalesência permite aninhamento: Significa que se o primeiro não existir, ele passa para a segunda tentativa e assim sucessivamente:
$valor = null;

$preco = isset($valor) ? ($preco = 2) : 0;

echo 'Preço->Ternário: ' . $preco . PHP_EOL;

$preco = $valor ?? ($preco = 2);

echo 'Preço->Coalesência Nula: ' . $preco . PHP_EOL;
