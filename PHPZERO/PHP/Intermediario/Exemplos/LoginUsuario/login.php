<?php
session_start();

require_once 'config.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados['frmLogin'])) {
    unset($dados['frmLogin']);

    extract($dados);

    $senha = md5($senha);

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

    $sql = $pdo->query($sql);

    if ($sql->rowCount() > 0) {
        $user = $sql->fetch();

        $_SESSION['id'] = $user['id'];
        header('Location: index.php');

    } else {
        echo "Usuário inválido..";
    }
}

?>


Sistema de Login<br><br>

<form method="post">
    Email: <br>
    <input type="email" name="email"><br><br>

    Senha: <br>
    <input type="password" name="senha"><br><br>

    <input type="submit" value="Entrar" name="frmLogin">
</form>



