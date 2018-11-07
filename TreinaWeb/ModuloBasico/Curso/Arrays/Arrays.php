<?php

$cursos = ['Delphi', 'Php', 'Pyton', 'CSS'];
var_dump($cursos);

//imprime a chave de index 1 = Php
echo $cursos[1];


//Arrays Associativos chave => valor
$Filmes = ['Senhor dos aneis' => 2002, 
           'Hobbit' => 2000];
        
var_dump($Filmes);

echo $Filmes['Hobbit'];


//Array indexado
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

//Array Associativo
$cliente = array(
  'nome' => 'Carlos',
  'endereco' => 'Rua de exemplo',
  'bairro' => 'Bairro de exemplo',
  'cidade' => 'Aparecida'    
);
var_dump($cliente);

