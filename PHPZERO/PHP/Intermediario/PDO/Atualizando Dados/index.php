<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 18/02/2019
 * Time: 15:32
 */

$dsn = 'mysql:dbname=blog;host=localhost';
$dbuser = 'root';
$dbpass = '';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
];

try {
    $con = new PDO($dsn, $dbuser, $dbpass, $options);

    $sql = "UPDATE usuarios SET email = 'abc@hotmail.com.br' WHERE email='teste@hotmail.com'";

    $con->query($sql);

    echo 'Usuário alterado com sucesso';


} catch (PDOException $e) {
    echo 'Falhou: ' . $e->getMessage();
}
