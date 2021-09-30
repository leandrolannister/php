<?php 
// JSON_NUMERIC_CHECK -> número será tratado como tal 
$data = file_get_contents("index.json");

$dados = json_decode($data, JSON_NUMERIC_CHECK);

echo "<pre>";
print_r($dados);
echo "</pre>";