<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = 'root';
$dbpass = '';
$options = [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass, $options);
} catch (PDOException $e) {
    echo 'Falhou a conexão: ' . $e->getMessage();
}
