<?php 

$contas = [
  1 => [
    'nome' => 'Leandro',
    'saldo' => 10
  ],
  2 => [
    'nome' => 'Soares',
    'saldo' => 20
  ],
  3 => [
    'nome' => 'Ribeiro',
    'saldo' => 30
  ],
];

foreach($contas as $id => $conta):
  echo $id . PHP_EOL;
endforeach;  