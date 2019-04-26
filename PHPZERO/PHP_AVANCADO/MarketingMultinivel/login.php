<?php
session_start();
require 'config.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados) && $dados['formLogin']) {
    $email = $dados['email'];
    $senha = $dados['senha'];

    $sql = 'SELECT * FROM usuarios WHERE email = :email AND senha = :senha';
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':senha', md5($senha));
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $sql = $sql->fetch();
        $_SESSION['mmLogin'] = $sql['id'];
        header("Location: index.php");
        exit;
    } else {
        echo "Usuários e/ou Senha inválidos.";
    }

}
?>


<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Marketing Multinivel - Login</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <style rel="stylesheet" type="text/css">
        .card-login {
            margin-top: 130px;
            padding: 18px;
            max-width: 30rem;
        }

        .flex {
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Login</h3>
                </div>
                <div class="card-body">
                    <form method="post" role="form">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Senha" name="senha" type="password"
                                       value="">
                            </div>

                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Entrar" name="formLogin">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
