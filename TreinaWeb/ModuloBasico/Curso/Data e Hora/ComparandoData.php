<?php

//Convertendo para timestamp

$data1 = strtotime("2012-01-10");
$data2 = strtotime("2012-01-11");

var_dump($data1 == $data2); // False. Elas não são iguais.

var_dump($data1 > $data2); // False. A data1 não é maior que a data2

var_dump($data1 < $data2); // True. A data1 é menor que a data2

var_dump($data1 != $data2); // True. Elas são diferentes.


echo "<hr>";
//Usando a classe DateTim

$data1 = new DateTime("2012-01-10");
$data2 = new DateTime("2012-01-11");

var_dump($data1 == $data2); // False. Elas não são iguais.

var_dump($data1 > $data2); // False. A data1 não é maior que a data2

var_dump($data1 < $data2); // True. A data1 é menor que a data2

var_dump($data1 != $data2); // True. Elas são diferentes.
