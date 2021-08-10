<?php

function SomaTrajeto(...$paradas)
{
    $total = 0;
    foreach($paradas as $valor){
        $total += $valor;
    }
    return $total;
}

echo SomaTrajeto(7, 40, 32, 78);