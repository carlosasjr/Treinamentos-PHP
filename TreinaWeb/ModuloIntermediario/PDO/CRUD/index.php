<?php

require './Crud.class.php';

$read = new Crud(PDO::FETCH_OBJ);

$id = filter_input(INPUT_GET,'id', FILTER_VALIDATE_INT);

$result = $read->Select('SELECT * FROM funcionario WHERE id = :id', ['id' => $id]);




var_dump($result);