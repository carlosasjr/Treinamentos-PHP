<?php
require_once 'config.php';

$userid = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if (!empty($data['btnFormPost'])) {
    unset($data['btnFormPost']);

    extract($data);
    $sql = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$userid'";

    $sql = $pdo->query($sql);

    header('Location: index.php');
}


$sql = "SELECT * FROM usuarios WHERE id = '$userid'";

$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) {
    $dado = $sql->fetch();
    extract($dado);
} else {
    header('Location: index.php?empty=true');
}


?>

<form method="post">
    Nome:<br>
    <input type="text" name="nome" value="<?= $nome ?>"><br><br>

    E-mail:<br>
    <input type="email" name="email" value=<?= $email ?>><br><br>


    <input type="submit" value="Salvar" name="btnFormPost">
</form>

