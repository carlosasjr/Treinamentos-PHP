<?php
require 'config.php';

global $db;

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if ($dados) {
    $id = $dados['id'];
    $nome = $dados['nome'];
    $email = $dados['email'];
    $senha = $dados['senha'];

    $sql = 'UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id = :id';
    $sql = $db->prepare($sql);

    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':senha', $senha);
    $sql->bindValue(':id', $id);

    $sql->execute();
}
