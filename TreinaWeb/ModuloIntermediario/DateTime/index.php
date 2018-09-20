<?php

$data = new DateTime("+1 day");
$data->format('y');
var_dump($data, $data->format('h:i:s'));


$datainicio = new DateTime('');
$datafim = new DateTime("+1 day");

$diferenca = $datainicio->diff($datafim);

var_dump($diferenca->d);

var_dump($diferenca);


$hora1 = new DateTime("12:10:10");
$hora2 = new DateTime("16:20:10");

$diferenca = $hora1->diff($hora2);

vprintf("%d horas, %d minutos e %d segundos", [
    $diferenca->h,
    $diferenca->i,
    $diferenca->s
]);


$data = new DateTime();
$data->modify("+2 day");

echo $data->format("d/m/Y"); // A data daqui 2 dias.



