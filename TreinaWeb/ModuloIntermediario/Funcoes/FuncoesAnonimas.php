<?php

function FiltrarArray($valor) {
    return $valor > 8;
}

$valores = [6, 7, 8, 9, 10, 3, 2, 11, 12];

$novosvalores = array_filter($valores, "FiltrarArray");

var_dump($novosvalores);


$saida = array_filter($valores, function($valor) {
    return $valor > 8;
} );

var_dump($saida);


$entrada = [6, 7, 8, 9, 10, 3, 2, 11, 12];

array_walk($entrada, function(&$v) {
    if ($v < 8) {
        // variável alterada por referencia
        $v *= 20;
    }
});

// Imprime o novo array
var_dump($entrada);
