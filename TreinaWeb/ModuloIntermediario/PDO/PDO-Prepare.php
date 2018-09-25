<?php

$dns = 'mysql:dbname=treinaweb;host=localhost;charset=utf8';
$user = 'root';
$password = '123';

try {
    $pdo = new PDO($dns, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_PERSISTENT => true
    ]);

    $stdm = $pdo->prepare('SELECT * from funcionario WHERE (id = :id or id = :id2)');

    $id = $_GET['id'];
    $id2 = 4;

    $stdm->bindValue(':id', $id);
    $stdm->bindValue(':id2', $id2);

    $stdm->execute();

    $result = $stdm->fetchAll();

    var_dump($result);
} catch (PDOException $ex) {
    echo $ex->getMessage();
}




