<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 18/02/2019
 * Time: 11:17
 */

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = 'root';
$dbpass = '';
$option = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8' ,
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $con = new PDO($dsn, $dbuser, $dbpass, $option);

    echo 'Conexão estabelecida com sucesso';

} catch (PDOException $e) {
    echo 'Falhou: ' . $e->getMessage();
}

