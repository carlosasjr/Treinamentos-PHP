<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 25/02/2019
 * Time: 17:11
 */
require_once 'config.php';

$hash = filter_input(INPUT_GET, 'hash', FILTER_DEFAULT);

if (!isset($hash) && empty($hash)) {
    header('Location: index.php');
    exit;
}

$sql = "SELECT id, hash FROM usuarios WHERE hash = :hash and convite < 2";

$sql = $pdo->prepare($sql);
$sql->bindValue(':hash', $hash, PDO::PARAM_STR);
$sql->execute();

if ($sql->rowCount() == 0) {
    header('Location: index.php');
    exit;
}


$idUser = $sql->fetch();
$idUser = $idUser['id'];


$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados) && $dados['formSubmit']) {
    unset($dados['formSubmit']);

    $sql = 'SELECT id FROM usuarios WHERE email = :email';
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':email', $dados['email'], PDO::PARAM_STR);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        header('Location: login.php');
        exit;
    }

    $sql = 'INSERT INTO usuarios (email, senha, hash, convite) VALUES  (:email, :senha, :hash, 0)';

    $sql = $pdo->prepare($sql);

    $sql->bindValue(':email', $dados['email'], PDO::PARAM_STR);
    $sql->bindValue(':senha', md5($dados['senha']), PDO::PARAM_STR);

    $hash = md5(rand(0, 99999) . rand(0, 99999));

    $sql->bindValue(':hash', $hash, PDO::PARAM_STR);
    $sql->execute();


    $sql = "UPDATE usuarios SET convite = convite + 1  WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':id', $idUser, PDO::PARAM_INT);
    $sql->execute();


    header('Location: login.php');
    exit;
}

?>

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

    <input type="submit" value="Salvar" name="formSubmit">
</form>


