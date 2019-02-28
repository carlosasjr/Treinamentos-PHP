<?php
require_once 'config.php';

if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha' ";

    if ($pdo->query($sql)) {
        header("Location: index.php");
    }
}
?>


<form method="POST">
    <label>Nome:</label><br>
    <input type="text" name="nome"><br><br>

    <label>E-mail:</label><br>
    <input type="text" name="email"><br><br>

    <label>Senha:</label><br>
    <input type="password" name="senha"><br><br>

    <input type="submit" value="Cadastrar" name="submitFormUsuario">
</form>



