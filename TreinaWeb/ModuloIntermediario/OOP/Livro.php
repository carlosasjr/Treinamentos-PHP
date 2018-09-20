<?php

require './Livro.class.php';

$livro1 = new Livro();
$livro1->codigo = 1;
$livro1->titulo = 'Senhor dos aneis';

$livro1->Cadastrar();

echo "<br>";

$livro1->Mostrar();
