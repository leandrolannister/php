<?php 

$contas = [
  1 => [
    'nome' => 'Leandro',
    'saldo' => 10
  ],
];

//Add value
$contas [] =
  [
    'nome' => 'Carlos',
    'saldo' => 25
  ];


foreach($contas as $id => $conta):
  echo $id . PHP_EOL;
endforeach;  