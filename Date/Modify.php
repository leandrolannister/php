<?php 

$dt = new DateTime();

$dt->sub(new DateInterval('P1M')); //Subtrai UM MES
$dt->setDate(2021,02,01); //Recebe uma nova data
$dt->modify('-1 day');

echo "<pre>";
print_r($dt);
echo "</pre>";
