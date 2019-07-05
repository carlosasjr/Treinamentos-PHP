<?php
require 'config.php';

global $db;

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if ($dados) {
    $id = $dados['id'];

    $sql = 'DELETE FROM usuarios WHERE id = :id';
    $sql = $db->prepare($sql);

    $sql->bindValue(':id', $id);

    $sql->execute();
}
