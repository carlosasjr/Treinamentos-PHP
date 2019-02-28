<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 18/02/2019
 * Time: 15:44
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


    $sql = "DELETE FROM usuarios WHERE id = 12";
    $con->query($sql);

    echo 'Usuário deletado com sucesso';


} catch (PDOException $e) {
    echo 'Falhou: ' . $e->getMessage();
}
