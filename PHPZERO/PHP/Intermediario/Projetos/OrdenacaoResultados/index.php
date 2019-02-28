<?php
$dsn = 'mysql:dbname=projeto_ordenar;host=localhost';
$dbuser = 'root';
$dbpass = '';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'
];

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass, $options);

} catch (PDOException $e) {
    echo 'Falhou: ' . $e->getMessage();
}


$sql = 'SELECT * FROM usuarios';

$order = filter_input(INPUT_GET, 'order', FILTER_DEFAULT);

if ($order) {
    $sql .= ' ORDER BY ' . $order;
}

?>
<form method="get">
    <select name="order" onchange="this.form.submit()">
        <option></option>
        <option value="nome" <?= $order == 'nome' ? 'selected=selected' : '' ?>>Por Nome</option>
        <option value="idade" <?= $order == 'idade' ? 'selected=selected' : '' ?>>Por Idade</option>
    </select>
</form>
<br>

<table border="1" width="400px">
    <tr>
        <th>Nome</th>
        <th>idade</th>
    </tr>

    <?php
    $sql = $pdo->query($sql);

    if ($sql->rowCount() > 0) :
        foreach ($sql->fetchAll() as $usuario) :
            ?>

            <tr>
                <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['idade'] ?></td>
            </tr>

        <?php
        endforeach;
    endif;
    ?>
</table>
