<?php


//Diferença em dias

//Usando a classe TDateTime

$date1 = new DateTime('1984-06-23');
$date2 = new DateTime('2018-08-27');
$diferenca = $date1->diff($date2);

var_dump($diferenca);

echo $diferenca->y . " ano(s) " . $diferenca->m . " mês(es) e " . $diferenca->d . " dia(s)";