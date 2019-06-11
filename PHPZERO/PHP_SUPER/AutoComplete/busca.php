<?php

$dsn = 'mysql:dbname=carlo019_bontur;host=localhost';
$user = 'root';
$senha = '';
$options = [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8mb4',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];

try {
    $pdo = new PDO($dsn, $user, $senha, $options);
} catch (PDOException $e) {
    echo 'Falhou: ' . $e->getMessage();
}

$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_STRING);
$produto = array();

if ($texto) {
    $sql = 'SELECT id, descricao FROM produtos WHERE id = :id OR descricao LIKE  :descricao ';
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':id', $texto);
    $sql->bindValue(':descricao', '%' . $texto . '%');
    $sql->execute();


    if ($sql->rowCount() > 0) {
        $produto =$sql->fetchAll();
    }
}

echo json_encode($produto);

