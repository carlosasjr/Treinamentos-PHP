<?php
session_start();
require_once 'config.php';

if (!isset($_SESSION['id']) && empty($_SESSION['id'])) {
    header('Location: login.php');
    exit;
}

$email = '';
$sql = "SELECT email, hash FROM usuarios WHERE id =  " . addslashes($_SESSION['id']);

$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) {
    $info = $sql->fetch();

    $email = $info['email'];
    $hash = $info['hash'];
}


?>


<h1>PAGINA RESTRITA</h1>

<p>Usuário: <?= $email ?> - <a href="login.php">sair</a></p>
<p>Link: http://localhost/treinamentos/PHPZERO/PHP/Intermediario/Projetos/RegistroporConvite/cadastrar.php?hash=<?= $hash ?> </p>

