<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['id']) && empty($_SESSION['id'])) {
    header('Location: login.php');
}

$deletaUser = filter_input(INPUT_GET, 'delete', FILTER_VALIDATE_INT);

if ($deletaUser) {
    $sql = "DELETE FROM usuarios WHERE id = '$deletaUser'";
    $pdo->query($sql);
}


?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Controle de Usuários</title>
</head>
<body>
<a href="adicionar.php">Adicionar Usuário</a>

<br>
<br>

<table border="0" width="100%">
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Acoes</th>
    </tr>

    <?php
    $sql = "SELECT * FROM usuarios";
    $sql = $pdo->query($sql);

    if ($sql->rowCount() > 0) {
        foreach ($sql->fetchAll() as $usuario) {
            echo '<tr>';
            echo "<td>{$usuario['nome']}</td>";
            echo "<td>{$usuario['email']}</td>";
            echo '<td><a href="editar.php?id=' . $usuario['id'] . '"> Editar</a> - <a href="index.php?delete=' . $usuario['id'] . '">Excluir</a></td>';

            echo "<td></td>";
            echo '</tr>';
        }
    }

    ?>

</table>
</body>
</html>


