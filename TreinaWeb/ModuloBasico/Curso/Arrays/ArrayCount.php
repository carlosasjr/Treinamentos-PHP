<?php

//Count = Retorna a quantidade de chaves(elementos)
$clientes = []; //0
$clientes = ['']; //1
$clientes = ['1', '2']; //2
$clientes = [
    0 => ['Carlos', 'José'],
    1 => ['Maria', 'Juliana'],
    2 => ['Baby, bola']
]; //3

echo count($clientes);
