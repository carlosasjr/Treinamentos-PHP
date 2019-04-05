<?php
session_start();

require_once 'config.php';
require_once 'classes/Usuarios.class.php';
require_once 'classes/Documentos.class.php';

if (!isset($_SESSION['logado'])) {
    header('Location: login.php');
    exit;
}

$usuario = new Usuarios($pdo);
$usuario->setUsuario($_SESSION['logado']);

if (!$usuario->temPermissao('SECRET')) {
    header("Location: index.php");
    exit;
}
?>


<h1>Pagina Secreta</h1>
