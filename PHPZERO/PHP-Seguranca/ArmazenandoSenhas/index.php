<?php
//MD5 - Não é recomendado para senha

//criptografa a senha
$hash = password_hash('123456', PASSWORD_BCRYPT);

$senha = '123456';
$hashBanco = '$2y$10$2pA7kkPaBR9.SQk0qPqUKOw4zflNzWdbbHXSGxVs2aFtMrjwfhHnq';

if (password_verify($senha, $hashBanco)) {
    echo 'acertou';
} else {
    echo 'Errou';
}


//no login
$email = 'suporte@hotmail.com';
$senha = '123456';

$sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
$sql->bindValue(':email', $email);
$sql->execute();

if ($sql->rowCount() > 0) {
    $dados = $sql->fetch();

    if (password_verify($senha, $dados['senha'])) {
        echo "Acertou login";
    } else {
        echo "Errou login";
    }
}






