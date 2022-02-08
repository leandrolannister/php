
<?php 

date_default_timezone_set('America/Sao_Paulo');

$dt = new DateTime();

// Incrementa um período de 2 dias
$newDt = $dt->add(new DateInterval("P2D"));

echo "<pre>";
print_r($newDt);
echo "</pre>";

