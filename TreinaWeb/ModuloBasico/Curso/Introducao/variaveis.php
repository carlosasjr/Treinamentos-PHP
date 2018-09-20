<?php


$int = 1;
$flot = 1.0;
$bol = true;

echo gettype($int);

echo "<br>";

if (is_int($int)):
    echo 'variavel é integer';
endif;

var_dump($int, $flot);

echo "<br>";

var_dump((int) round(25/7));

//tamanho de um inteiro
//o php executa um overflow caso o numero inteiro estoure, mudando para float
echo PHP_INT_MAX;



?>
