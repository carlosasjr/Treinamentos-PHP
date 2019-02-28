<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 28/02/2019
 * Time: 14:20
 */

try {
    $dsn = 'mysql:dbname=projeto_caixaeletronico;host=localhost';
    $dbuser = 'root';
    $dbpass = '';
    $options = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    $pdo = new PDO($dsn, $dbuser, $dbpass, $options);

} catch (PDOException $e) {
    echo 'Falhou: ' . $e->getMessage();
}

