<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 26/03/2019
 * Time: 15:32
 */

$dsn = 'mysql:dbname=projeto_multinivel;host=localhost';
$user = 'root';
$senha = '';
$options = [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8mb4',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];

try {
    global $pdo;
    $pdo = new PDO($dsn, $user, $senha, $options);

} catch (PDOException $e) {
    echo 'Falhou: ' . $e->getMessage();
}


define('__LIMITE', 3);

$patentes = array();

