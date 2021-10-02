<?php 
// strtotime pode auxiliar na contagem de dias
$dt = strtotime("+1 week 1 day");

echo date('d/m/Y',$dt);