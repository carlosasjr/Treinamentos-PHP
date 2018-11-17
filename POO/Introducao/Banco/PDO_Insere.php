<?php

$dns = 'mysql:host=localhost; dbname=livro; port=3306;charset=utf8';
$username = 'root';
$password = '123';


try {
    $pdo = new PDO($dns, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $pdo->exec("INSERT INTO famosos (codigo, nome) VALUES (1, 'Carlos Antonio')");
    $pdo->exec("INSERT INTO famosos (codigo, nome) VALUES (2, 'Mario Antonio')");
    $pdo->exec("INSERT INTO famosos (codigo, nome) VALUES (3, 'José Antonio')");
    
} catch (PDOException $exc) {
    echo $exc->getMessage();
}

