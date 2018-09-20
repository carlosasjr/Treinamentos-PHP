<?php

/*
sort() - A função mais simples de ordenação de arrays. Ordena os elementos de um array em ordem crescente. 
 * O índice dos elementos muda, de acordo com a ordem em que são exibidos.
 
rsort() - Funciona de maneira inversa à função sort(): Ordena os elementos de um array em ordem decrescente. 
 * O índice dos elementos muda, de acordo com a ordem em que são exibidos.
 
asort() - Tem o funcionamento semelhante à função sort(): Ordena os elementos de um array em ordem crescente,
 * porém mantém os índices sem alterá-los.
 
arsort() - Funciona de maneira inversa à função asort(). Ordena os elementos de um array em ordem decrescente, 
 * porém mantém os índices sem alterá-los.
 
Shuffle() – Diferente das outras, essa “desordena” completamente o array. Quando aplicada, os elementos 
 * são distribuídos de forma randômica. Seus índices não são mantidos.
 */


$cursos = array("PHP","CSS3","HTML5","MySQL");

var_dump($cursos);

echo 'sort:';
sort($cursos);
var_dump($cursos);


echo 'rsort:';
rsort($cursos);
var_dump($cursos);

echo 'asort:';
asort($cursos);
var_dump($cursos);


echo 'arsort:';
arsort($cursos);
var_dump($cursos);