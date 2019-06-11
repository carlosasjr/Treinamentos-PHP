<?php

$dsn = 'mysql:dbname=loginajax;host=localhost';
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



$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if (isset($dados['email']) && !empty($dados['email'])) {
    $email = $dados['email'];
    $senha = md5($dados['senha']);


    $sql = 'SELECT * FROM usuarios WHERE email = :email AND senha = :senha';

    $sql = $pdo->prepare($sql);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':senha', $senha);
    $sql->execute();

    if ($sql->rowCount() > 0 ) {
        echo "Usuário logado com sucesso...";
    } else {
        echo "Email, e/ou senha estão inválidos";
    }
} else {
    echo "Digite um e-mail e/ou senha";
}
