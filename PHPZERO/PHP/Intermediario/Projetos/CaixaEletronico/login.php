<?php
session_start();
require_once 'config.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados) && isset($dados['formLogin'])) {
    $agencia = $dados['agencia'];
    $conta = $dados['conta'];
    $senha = md5($dados['senha']);

    $sql = 'SELECT * FROM contas WHERE agencia = :agencia AND 
             conta = :conta AND senha = :senha';

    $sql = $pdo->prepare($sql);
    $sql->bindValue(':agencia', $agencia, PDO::PARAM_INT);
    $sql->bindValue(':conta', $conta, PDO::PARAM_INT);
    $sql->bindValue(':senha', $senha, PDO::PARAM_STR);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $sql = $sql->fetch();
        $_SESSION['banco'] = $sql['id'];

        header('Location: index.php');
        exit;
    }

}
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<form method="post">
    Agência:<br>
    <input type="text" name="agencia"><br><br>

    Conta:<br>
    <input type="text" name="conta"><br><br>

    Senha:<br>
    <input type="password" name="senha"><br><br>

    <input type="submit" name="formLogin" value="Entrar">
</form>
</body>
</html>