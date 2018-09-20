<?php

$array1 = array("a" => "PHP", "CSS", "JavaScript", "Java");
$array2 = array("a" => "CSS", "b" => "JavaScript", "PHP");

$resultado = array_diff($array1, $array2);

print_r($resultado); 
// Foi retornado um array com a diferença que, no caso, é apenas o elemento Java que se encontra no $array1.