<?php

$dns = 'mysql:dbname=treinaweb;host=localhost;charset=utf8';
$user = 'root';
$senha = '123';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => true,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $conn = new PDO($dns, $user, $senha, $options);

    /*$qtd = $conn->exec("UPDATE funcionario 
                       SET telefone = '00 00000000'");*/
    
    /*$qtd = $conn->exec("INSERT INTO funcionario
            (nome, email, endereco, telefone) VALUES(
            'CARLOS ANTONIO', 'carlos@theplace.com.br', 'RUA ISAAC JULIO BARRETO', '12 33111714') 
            ");*/
    
    $qtd = $conn->exec("DELETE FROM funcionario WHERE id = 1");

    echo 'Registros afetados: ' . $qtd;

    $result = $conn->query('SELECT * FROM funcionario');

    $func = $result->fetchAll();

 
    var_dump($func);
} catch (PDOException $e) {
    echo $e->getMessage();
}


        

