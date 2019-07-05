<!DOCTYPE html>
<?php
require 'config.php';

global $db;

$sql = "SELECT * FROM usuarios";
$sql = $db->query($sql);
$usuarios = array();

if ($sql->rowCount() > 0) {
    $usuarios = $sql->fetchAll();
}
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Formulário Modal</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Usuários</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Ação</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($usuarios as $usuario) : ?>
            <tr>
                <td><?= $usuario['nome'] ?></td>
                <td><?= $usuario['email'] ?></td>
                <td><?= $usuario['senha'] ?></td>
                <td>
                    <a href="javascript:;" onclick="editar('<?= $usuario['id'] ?>')">Editar</a>
                    <a href="javascript:;" onclick="excluir('<?= $usuario['id'] ?>')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <div id="modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    ...
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>

