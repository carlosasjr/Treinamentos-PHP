<!DOCTYPE html>
<?php
require_once 'config.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados) && $dados['formUsuario']) {
    $nome = $dados['nome'];
    $senha = md5($dados['senha']);
    $email = $dados['email'];
    $st = 0;

    echo $senha;


    $sql = "INSERT INTO usuarios (nome, email, senha, status) VALUES (:nome, :email, :senha, :st)";
    $sql = $pdo->prepare($sql);

    $sql->bindParam(':nome', $nome);
    $sql->bindParam(':email', $email);
    $sql->bindParam(':senha', $senha);
    $sql->bindParam(':st', $st);


    $sql->execute();


    $idUser = $pdo->lastInsertId();

    $hash = md5($idUser);
    $link = 'http://www.carlosasjr.com.br/contatos/confirma.php?h=' . $hash;


    //enviar email
    /* DADOS DO EMAIL*/
    $para = $email;
    $assunto = 'Email de confirmação';

    $corpo = "Nome: {$nome} \n";
    $corpo .= "Confirme seu cadastro clicando no link a abaixo \n";
    $corpo .= $link;

    $cabecalho = "From: contato@carlosasjr.com.br" . "\r\n";
    $cabecalho .= "Reply-To: {$email}" . "\r\n";
    $cabecalho .= "X-Mailer: PHP/" . phpversion() . "\r\n";

    mail($para, $assunto, $corpo, $cabecalho);

    echo "<h2>OK! Confirme seu cadastro agora!</h2>";

}
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Cadastro com confirmação</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
</head>
<body>
<div class="container">
    <form method="post">
        <div class="form-row">
            <div class="col-6">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input class="form-control" type="text" id="nome" name="nome">
                </div>
            </div>
        </div>


        <div class="form-row">
            <div class="col-6">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" id="email" name="email">
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-3">
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input class="form-control" type="password" id="senha" name="senha">
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="col-6">
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Salvar" name="formUsuario">
                </div>
            </div>
        </div>


    </form>

</div>

<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>

