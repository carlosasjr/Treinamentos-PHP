<?php

require './Crud.class.php';

$read = new Crud(PDO::FETCH_OBJ);

$id = filter_input(INPUT_GET,'id', FILTER_VALIDATE_INT);

//$result = $read->Select('SELECT * FROM funcionario WHERE id = :id', ['id' => $id]);



/*$id = $read->Insert('funcionario', [
    'nome' => 'Ana Pereira da Silva',
    'email' => 'ana2@gmail.com',
    'endereco' => 'Rua Teste4, 500',
    'telefone' => '11 9999-9999'
]);*/

echo $read->Update('funcionario', ['email' => 'ana2_teste2@gmail.com',
       'telefone' => '12 3311-1714'], 'id=18');

$result = $read->Select('SELECT * FROM funcionario');


var_dump($result,$id);