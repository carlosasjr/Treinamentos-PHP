<?php
require_once 'config.php';
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Controle de Usuários</title>
</head>
<body>
<a href="adicionar.php">Adicionar novo Usuário</a>
<table border="0" width="100%">
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Acoes</th>
    </tr>

    <?php
    $sql = 'SELECT * FROM usuarios';
    $sql = $pdo->query($sql);

    if ($sql->rowCount() > 0) {
        foreach ($sql->fetchAll() as $usuario) {
            echo '<tr>';
            echo "<td>{$usuario['nome']}</td>";
            echo "<td>{$usuario['email']}</td>";
            echo '<td><a href="editar.php?id=' . $usuario['id'] . '">Editar</a> - <a href="excluir.php?id=' . $usuario['id'] . '">Excluir</a> </td>';
            echo '</tr>';
        }
    }

    ?>
</table>

</body>
</html>


