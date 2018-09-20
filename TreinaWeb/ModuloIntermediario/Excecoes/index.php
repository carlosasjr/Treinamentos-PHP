<?php

require './Calculadora.class.php';

try {
$calc = new Calculadora(20);

$calc->dividePor(0);

printf("Resultado da divisão: %s", $calc->getValor());
    
} catch (Exception $exc) {
    echo "Opps..Aconteceu algo incomum..";
    echo $exc->getMessage();
}






