<?php

$valor = null;

//$preco = isset($valor) ? 10.00 : 0;

$preco = $valor ?? 0;

echo $preco;
