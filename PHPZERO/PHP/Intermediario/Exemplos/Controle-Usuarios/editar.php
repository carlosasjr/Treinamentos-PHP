<?php
require_once 'config.php';

$id = 0;

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = addslashes($_GET['id']);
}

if (isset($_POST['nome']) && !empty($_POST['nome'])) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);

    $sql = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id' ";

    $pdo->query($sql);

    header('Location: index.php');
}


$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$sql = $pdo->query($sql);
if ($sql->rowCount() > 0) {
    $dado = $sql->fetch(); // pega o primeiro resultado
} else {
    header('Location: index.php');
}


?>

<form method="POST">
    <label>Nome:</label><br>
    <input type="text" name="nome" value="<?= $dado['nome'] ?>"><br><br>

    <label>E-mail:</label><br>
    <input type="text" name="email" value="<?= $dado['email'] ?>"><br><br>

    <input type="submit" value="Atualizar" name="submitFormUsuario">
</form>

