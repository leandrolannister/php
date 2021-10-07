<?php
//Este array é uma opção pafra deixar a senha mais forte.
//Quanto maior o cost mais forte a senha e mais lenta de ser gerada
$options = [
   'cost' => 10
];

$senha = "123456";
$hash = password_hash($senha, PASSWORD_DEFAULT, $options);

echo 'Senha: ' . $senha . PHP_EOL;
echo 'Hash: ' . $hash . PHP_EOL;

if(password_verify($senha, $hash)){
    echo "Válida";
}else{
    echo "Inválida";
}