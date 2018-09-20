<?php

$cursos = ['Delphi', 'Php', 'pyton', 'CSS'];
var_dump($cursos);

//imprime a chave de index 1 = Php
echo $cursos[1];


//Arrays Associativos chave => valor
$Filmes = ['Senhor dos aneis' => 2002, 
           'Hobbit' => 2000];
        
var_dump($Filmes);

echo $Filmes['Hobbit'];


//Definindo as chaves

$nomes[1] = 'Carlos';
$nomes[2] = 'Maria';
$nomes[3] = 'José';
var_dump($nomes);

//adicionando mais um item no array sem informar a chave
//Acrescenta o indice 4 automaticamente.
$nomes[] = "Samuel";
var_dump($nomes);


$megasena = array(10, 13, 44, 58, 43);

// Adiciona mais uma dezena ao jogo
$megasena[] = 33;

// Imprime as dezenas
var_dump($megasena);

//Removendo um indice de um array unset()

unset($megasena[1]); //removendo a dezena 13 com indice 1
var_dump($megasena);


