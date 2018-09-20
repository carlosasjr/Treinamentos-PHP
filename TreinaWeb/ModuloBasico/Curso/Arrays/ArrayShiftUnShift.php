<?php

$cursos = ['PHP', 'MYSQL'];

//array_shift = Remove e retorna o primeiro elemento

array_shift($cursos);
var_dump($cursos);


//array_unshift = Adiciona um elemento no inicio
$cursos = ['PHP', 'MYSQL'];
array_unshift($cursos, 'DELPHI');
var_dump($cursos);



