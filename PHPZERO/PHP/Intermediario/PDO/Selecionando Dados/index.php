<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 18/02/2019
 * Time: 13:43
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

    $sql = "SELECT * FROM usuarios";
    $sql = $con->query($sql);

    if ($sql->rowCount() == 0) {
        die('Não há usuários cadastrados');
    }

    foreach ($sql->fetchAll() as $usuario) {
        echo "Nome: {$usuario['nome']} - {$usuario['email']}" . '<br>';
    }


} catch (PDOException $e) {
    echo 'Falhou: ' . $e->getMessage();
}



