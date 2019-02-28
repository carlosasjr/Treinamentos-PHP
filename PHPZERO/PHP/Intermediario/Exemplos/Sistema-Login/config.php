<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 18/02/2019
 * Time: 17:20
 */

$dsn = 'mysql:dbname=blog;host=localhost';
$user = 'root';
$pass = '';
$options = [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

} catch (PDOException $e) {
    echo 'Falhou a conexão: ' . $e->getMessage();
}

