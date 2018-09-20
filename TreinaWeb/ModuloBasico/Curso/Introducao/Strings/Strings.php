<?php

$nome = 'Carlos';
$sobrenome = 'Antonio';

echo $nome . ' ' .$sobrenome;

echo "<br>";

echo "Meu nome é: {$nome} {$sobrenome}";

echo "<br>";

$web = "<h1>Meu nome é: {$nome} {$sobrenome}</h1>";

echo $web;


//Para escapar as aspas usa-se a \ (barra invertida) antes delas. .
//Escapando as aspas é possível ter, por exemplo, uma string definida usando aspas duplas e dentro dela 
//várias declarações de aspas duplas.

$web = "<h1 style=\"color:blue\">Meu nome é: {$nome} {$sobrenome}</h1>";

echo $web;


// Para imprimir \contato\ precisa escapar a ultima barra invertida
echo "\contato\\";


echo "<br>";

//imprimindo a posição de uma string - Inicia a contar do 0
echo $sobrenome[2];

echo "<br>";

//Concatenando
$nome .= $sobrenome;

//CarlosAntonio
echo $nome;





