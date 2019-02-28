<?php
session_start();
require_once 'config.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if (!empty($dados) && isset($dados['formTransacao'])) {
    $tipo = $dados['tipo'];
    $valor = str_replace(',', '.', $dados['valor']);
    $valor = floatval($valor);

    $sql = "INSERT INTO historico (id_conta, tipo, valor) VALUES (:idconta, :tipo, :valor)";

    $sql = $pdo->prepare($sql);
    $sql->bindValue(':idconta', $_SESSION['banco'], PDO::PARAM_INT);
    $sql->bindValue(':tipo', $tipo, PDO::PARAM_STR);
    $sql->bindValue(':valor', $valor);
    $sql->execute();

    $operacao = ($tipo == '0') ? '+' : '-';

    $sql = $pdo->prepare("UPDATE contas SET saldo = saldo {$operacao} :valor WHERE id = :id");
    $sql->bindValue(':valor', $valor);
    $sql->bindValue(':id', $_SESSION['banco']);
    $sql->execute();

    header('Location: index.php');
    exit;

}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<form method="post">
    Tipo de Transação: <br>
    <select name="tipo">
        <option value="0">Depósito</option>
        <option value="1">Retirada</option>
    </select><br><br>

    Valor:<br>
    <input type="text" name="valor" pattern="[0-9.,]{1,}"><br><br>

    <input type="submit" name="formTransacao" value="Adicionar">
</form>
</body>
</html>
