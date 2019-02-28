<?php
$dsn = 'mysql:dbname=projeto_registroporconvite;host=localhost';
$dbuser = 'root';
$dbsenha = '';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'
];

try {
    $pdo = new PDO($dsn, $dbuser, $dbsenha, $options);

} catch (PDOException $e) {
    echo 'Falha de Banco de Dados: ' . $e->getMessage();
}

?>
