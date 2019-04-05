<!DOCTYPE html>
<?php
session_start();

require_once 'config.php';
require_once 'class/Usuarios.class.php';

use LoginUnico\Usuarios;

if (empty($_SESSION['logado'])) {
    header("Location: login.php");
    exit;
}

$id = $_SESSION['logado'];
$ip = $_SERVER['REMOTE_ADDR'];

$usuario = new Usuarios($pdo);

//Verifica se é o mesmo ip que esta logado, senão redireciona para o login
if (!$usuario->ipLogado($id, $ip)) {
    header("Location: login.php");
    exit;
}

$teste  = 'carlos';

$html = <<<HTML
<b>$teste</b>
HTML;

echo $html;




?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Projeto Login Unico</title>
</head>
<body>
<h1>Conteudo Confidencial</h1>
</body>
</html>

