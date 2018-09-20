<?php

$array1 = array("O Hobbit" => 2012, 4, 6);
$array2 = array("a", "b", "c" => "d", "cor" => "azul", 8);
$resultado = array_merge($array1, $array2);

print_r($resultado);
