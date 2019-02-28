<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 18/02/2019
 * Time: 14:14
 */

$dsn = 'mysql:dbname=blog;host:localhost';
$dbuser = 'root';
$dbpass = '';
$options = [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try {
    $conn = new PDO($dsn, $dbuser, $dbpass, $options);

    $nome = 'Testador';
    $email = 'teste@hotmail.com';
    $senha = md5('123');

    $sql = "INSERT INTO usuarios SET nome = '{$nome}', email= '{$email}', senha = '{$senha}'";

    $sql = $conn->query($sql);

    //lastInsertId = retorna o id autoincremento
    echo "Usuário inserido: {$conn->lastInsertId()}";



} catch (PDOException $e) {
    echo 'Falhou: ' . $e->getMessage();
}
