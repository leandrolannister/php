<?php

$password = "123";

//Fraca
echo "Senha Cliptografada: " .  base64_encode($password) . PHP_EOL;
echo "Senha:" . base64_decode(base64_encode($password)) . PHP_EOL;

