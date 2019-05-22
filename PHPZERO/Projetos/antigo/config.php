<?php
session_start();

global $pdo;

try {

    $options = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    $pdo = new PDO("mysql:dbname=classificados;host=localhost", 'root', '', $options);


} catch (PDOException $e) {
    echo "FALHOU: " . $e->getMessage();
}

?>

