<!DOCTYPE html>
<?php
session_start();
require 'config.php';
require 'funcoes.php';

if (empty($_SESSION['mmLogin'])) {
    header("Location: login.php");
    exit;
}

$id = $_SESSION['mmLogin'];

$sql = $pdo->prepare("SELECT u.nome, p.nome as p_nome FROM usuarios u 
                                LEFT JOIN patentes p ON 
                                p.id = u.patente
                                WHERE u.id = :id");
$sql->bindValue(':id', $id);
$sql->execute();

if ($sql->rowCount() > 0) {
    $sql = $sql->fetch();

    $nome = $sql['nome'] . ' - ' . $sql['p_nome'];
} else {
    header("Location: login.php");
    exit;
}

$lista = listar($id, __LIMITE);
?>


<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Marketing Multinivel</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Sistema de Marketing</h1>
    <h2>Usuário Logado: <?php echo $nome; ?></h2>

    <a class="btn btn-primary" href="cadastro.php">Cadastrar Novo Usuário</a>

    <a class="btn btn-dark" href="sair.php">Sair</a>

    <hr>

    <div id="lista">

        <h4>Lista de cadastros</h4>

        <?php echo exibir($lista)?>

    </div>
</div>

<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>

</body>
</html>

