<?php
$dns = 'mysql:host=localhost;port=3306;dbname=treinaweb;charset=utf8';
$usuario = 'root';
$senha = '123';


try {
    $pdo = new PDO($dns, $usuario, $senha, [ PDO::ATTR_PERSISTENT => true,
                                             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $funcionario = $pdo->query('SELECT id, nome, email FROM funcionario');

} catch (PDOException $e) {
    exit('Erro:' . $e->getMessage());
}


?>

<table border='1'>
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>E-mail</td>
    </tr>

    <?php while ($func = $funcionario->fetchObject()): ?>
        <tr>
            <td><?= $func->id; ?></td>
            <td><?= $func->nome; ?></td>
            <td><?= $func->email; ?></td>
        </tr>
    <?php endwhile; ?>
</table>





