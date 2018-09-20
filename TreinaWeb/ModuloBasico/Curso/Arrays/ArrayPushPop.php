<?php

$cursos = ['PHP', 'MYSQL'];

//array_push = Adiciona um elemento no final do array
array_push($cursos, 'DELPHI');
var_dump($cursos);

//array_pop = Remove e retorna o ultimo elemento / removeu retornou o DELPHI 
array_pop($cursos);


var_dump($cursos);