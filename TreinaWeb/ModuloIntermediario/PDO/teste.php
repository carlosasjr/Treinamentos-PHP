<?php

$dns = 'mysql:dbname=treinaweb;host=localhost;charset=utf8';
$user = 'root';
$password = '123';

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => true,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $pdo = new PDO($dns, $user, $password, $options);

    $sql = 'SELECT * FROM funcionario';

    $result = $pdo->query($sql);
    
//    foreach ($result as $func) {
//        echo $func['nome'] . '<br>';
//    }
    
    //traz o resulto em forma de array para uma variavel
    $func = $result->fetchAll();
    
    var_dump($func);
    
    //retorna a quantidade de registros
    echo $result->rowCount();
    
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>







        
