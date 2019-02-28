<?php
require_once 'config.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados['btnFormPost'])) {
    unset($dados['btnFormPost']);

    extract($dados);

    $senha = md5($senha);

    $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha' ";
    if ($pdo->query($sql)) {
        header('Location: index.php');
    }
}

?>

<form method="post">
    Nome:<br>
    <input type="text" name="nome"><br><br>

    E-mail:<br>
    <input type="email" name="email"><br><br>

    Senha:<br>
    <input type="password" name="senha"><br><br>

    <input type="submit" value="Salvar" name="btnFormPost">
</form>



