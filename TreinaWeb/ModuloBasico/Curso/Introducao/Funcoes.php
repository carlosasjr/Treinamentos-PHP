<?php

//função com parametros default
function Somar($valor1 = 1, $valor2 = 1) {
    return $valor1 + $valor2;
}

echo Somar();

echo "<hr>";

//função para imprimir um array

function ImprimeArray($array = []) {
    foreach ($array as $key => $value):
        echo "$key = $value <br>";
    endforeach;
}

$clientes = [
    1 => 'Carlos',
    2 => 'Maria',
    3 => 'José'
];

ImprimeArray($clientes);

echo "<hr>";

ImprimeArray([1 => 'Carlos',  2 => 'Maria', 3 => 'José']);


echo "<hr>";

ImprimeArray();

echo "<hr>";

function FormataValor($valor = 0){
    return 'R$ ' . number_format($valor, 2, ',','.') ;
}

echo FormataValor(2350);

echo "<hr>";

function retiraPorcent($porcentagem, $valor){
    return $valor -= ($valor * $porcentagem) / 100;
}

echo FormataValor(retiraPorcent(10, 100));



    


