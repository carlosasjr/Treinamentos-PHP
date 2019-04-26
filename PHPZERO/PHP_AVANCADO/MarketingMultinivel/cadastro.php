<!DOCTYPE html>
<?php
session_start();
require 'config.php';

if (empty($_SESSION['mmLogin'])) {
    header("Location: login.php");
    exit;
}

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados) && $dados['formCadastro']) {
    $nome = $dados['nome'];
    $email = $dados['email'];

    $id_pai = $_SESSION['mmLogin'];
    $senha = md5($dados['email']);

    $sql = 'SELECT * FROM usuarios WHERE email = :email';
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':email', $email);
    $sql->execute();

    if ($sql->rowCount() == 0) {
        $sql = $pdo->prepare('INSERT INTO usuarios (id_pai, nome, email, senha) VALUES (:id_pai, :nome, :email, :senha)');

        $sql->bindValue(':id_pai', $id_pai);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->execute();

        header("Location: index.php");
    } else {
        echo "Já existe um usuário cadastrado com este e-mail";
    }
}

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <form method="post">
        <div class="form-row">
            <div class="col-6 offset-3">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" placeholder="Nome" class="form-control">
                </div>
            </div>
        </div>


        <div class="form-row">
            <div class="col-6 offset-3">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" placeholder="E-mail" class="form-control">
                </div>
            </div>
        </div>


        <div class="form-row">
            <div class="col-6 offset-3">
                <div class="form-group">
                    <input class="btn btn-danger" type="submit" value="Salvar" name="formCadastro">
                </div>
            </div>
        </div>


    </form>
</div>


<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>

