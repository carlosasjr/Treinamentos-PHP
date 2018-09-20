<?php

$saldo = 2000.00;
$retirada = 458.25;

$resultado = $saldo - $retirada;

//Valor - 10%
$resultado -= $resultado * 0.10;

echo 'R$' . number_format($resultado, 2, ',', '.');

