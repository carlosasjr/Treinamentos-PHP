<?php

//str_replace substituiu um texto por outro
//é case sensitive

$nome = 'Maria Eugenia';

echo str_replace('Eugenia', 'Santos', $nome);

$titulo = '<h1>%titulo%</h1>';

echo str_replace('%titulo%', 'TreinaWeb Cursos', $titulo);


//substituindo com array

$frase = "Os cachorros não são sociaveis e nem amigos dos homens";
$mentira = ['não', 'nem'];
echo str_replace($mentira, '', $frase);

echo '<hr>';

$frase  = "Na minha dieta consumo sorvete, sanduíche e refrigerante.";
$ruim = array("sorvete", "sanduíche", "refrigerante");
$bom = array("pão integral", "peito de peru", "suco de laranja natural");

echo str_replace($ruim, $bom, $frase);

echo '<hr>';

//retorna quantas ocorrencias foram encontradas
str_replace($ruim, $bom, $frase, $count);

echo $count; // 3

echo '<hr>';

//substr copia parte da string, semelhante ao copy

//substr(string, posição inicial, quantidade)

$string = 'abcdefgh';
echo $string;

var_dump( substr($string, 0, 1) );     // retorna 'a'
var_dump( substr($string, -1) );       // retorna 'h'
var_dump( substr($string, -2) );       // retorna 'gh'
var_dump( substr($string, -4) );       // retorna 'efgh'
var_dump( substr($string, 0, 4) );     // retorna 'abcd

echo '<hr>';

var_dump( substr($string, -5, -2) ); // retorna 'def'
var_dump( substr($string, 0, -1) ); // retorna 'abcdefg'
var_dump( substr($string, 0, -3) ); // retorna 'abcde'
var_dump( substr($string, 0, 2) ); // retorna 'ab'
var_dump( substr($string, 7, 1) ); // retorna 'h'
var_dump( substr($string, 8, 1) ); // retorna FALSE

echo substr('TreinaWeb', 5, 3);

