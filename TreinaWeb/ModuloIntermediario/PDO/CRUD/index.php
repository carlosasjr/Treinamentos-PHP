<?php

require './Crud.class.php';

$read = new Crud(PDO::FETCH_OBJ);

$id = filter_input(INPUT_GET,'id', FILTER_VALIDATE_INT);

//$result = $read->Select('SELECT * FROM funcionario WHERE id = :id', ['id' => $id]);



$id = $read->Insert('funcionario', [
    'nome' => 'Ana Pereira da Silva',
    'email' => 'ana2@gmail.com',
    'endereco' => 'Rua Teste4, 500',
    'telefone' => '11 9999-9999'
]);

$result = $read->Select('SELECT * FROM funcionario');


var_dump($result,$id);