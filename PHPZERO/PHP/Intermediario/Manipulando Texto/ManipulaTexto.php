<?php

//transforma uma string em um array

$nome = "Carlos Antônio Santos Junior";

$x = explode(' ', $nome);

print_r($x);

echo "<hr>";


//transforma um array em uma string;

$array = array("Carlos", "Santos");

$nome = implode(' ', $array);

echo $nome;

echo "<hr>";

//Formata valores

$valor = 125485.55423;

echo number_format($valor, 2, ',', '.');

echo "<hr>";
//troca texto

$texto = "O rato roeu a roupa!";

$string = str_replace('roeu', 'comeu', $texto);

echo $string;

echo "<hr>";

//transforma tudo em minusculo
$nome = 'CARLOS ANTONIO';

echo strtolower($nome);

echo "<hr>";
//transforma tudo em maiusculo
$nome = 'carlos antonio';

echo strtoupper($nome);

echo "<hr>";

//pega parte do texto;
$texto = "Carlos";

$x = substr($texto,0,3);
echo $x;

echo "<hr>";

//converte para maiusculo o primeiro caracter de uma string
$nome = "carlos";

echo ucfirst($nome) . "<br>";

$nome = "carlos antonio dos santos";
echo ucwords($nome);



