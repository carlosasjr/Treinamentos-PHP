<?php

try {
    $pdo = new PDO('mysql:dbname=saas;host=localhost', 'root', '');

} catch (PDOException $e) {
    echo "Falhou: " . $e->getMessage();
}

$dominio = $_SERVER['HTTP_HOST'];

$sql = "SELECT * FROM usuarios WHERE dominio = :dominio";
$sql = $pdo->prepare($sql);
$sql->bindValue(':dominio', $dominio);
$sql->execute();

if ($sql->rowCount() > 0) {
    $cliente = $sql->fetch();

    if (file_exists('clientes/' . $cliente['id'] . '/index.php')) {
        require 'clientes/' . $cliente['id'] . '/index.php';
    }  else
    {
        echo "Fora do ar";
    }

    echo "Cliente que acessou: " . $cliente['nome'];
} else {
    echo "Sistema fora do ar.";
}

?>

