<?php
session_start();
require_once 'config.php';

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql = $pdo->query($sql);

    if ($sql->rowCount() > 0) {
        $dado = $sql->fetch(); //pega o primeiro resultado da lista

        $_SESSION['id'] = $dado['id'];
        header('Location: index.php');
    }
}
?>


Página de login
<br>
<br>

<form method="post">
    <label class="label"> <br>
        <span class="field">E-mail:</span>
        <input type="text" name="email"/>
    </label>
    <br>
    <br>

    <label class="label"> <br>
        <span class="field">Senha:</span>
        <input type="password" name="senha"/>
    </label>
    <br>
    <br>

    <input type="submit" value="Entrar">
</form>

