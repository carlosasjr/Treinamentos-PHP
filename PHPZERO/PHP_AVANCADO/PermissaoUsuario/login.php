<?php
session_start();
require_once 'config.php';
require_once 'classes/Usuarios.class.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados)) {
    $email = $dados['email'];
    $senha = md5($dados['senha']);

    $usuario = new Usuarios($pdo);

    if ($usuario->fazerLogin($email, $senha)) {
        header('Location: index.php');
        exit;
    }

    echo "Usuario ou Senha inválidos";
}

?>

<form method="post">
    Email: <br>
    <input type="email" name="email">
    <br>
    <br>

    Senha:<br>
    <input type="password" name="senha">
    <br>
    <br>
    <input type="submit" value="Entrar">
</form>
