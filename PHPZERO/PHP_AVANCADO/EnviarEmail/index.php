

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Enviar E-mail</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <style type="text/css">

    </style>
</head>
<body>
<div class="container">
    <?php
    $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($data) && $data['formSendMail']) {
        $nome = $data['nome'];
        $email = $data['email'];
        $mensagem = $data['mensagem'];

        /* DADOS DO EMAIL*/
        $para = 'carlos@theplace.com.br';
        $assunto = 'Email de teste';

        $corpo = "Nome: {$nome} \n";
        $corpo .= "Email: {$email} \n";
        $corpo .= "Mensagem: {$mensagem} \n";

        $cabecalho = "From: contato@carlosasjr.com.br" . "\r\n";
        $cabecalho .= "Reply-To: {$email}" . "\r\n";
        $cabecalho .= "X-Mailer: PHP/" . phpversion() . "\r\n";


        mail($para, $assunto, $corpo, $cabecalho);

        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
        echo '<h4 class="alert-heading">Sucesso.</h4>';
        echo 'E-mail enviado com sucesso';
        echo '<button class="close" data-dismiss="alert">';
        echo '<span aria-hidden="true">&times;</span>';
        echo '</button>';
        echo '</div>';

        header('Location: index.php');
    }

    ?>



    <form method="post">
        <div class="row">
            <div class="col-12" col-md-12>
                <div class="form-row">
                    <div class="col-12 col-md-6 offset-md-3">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input id="nome" type="text" name="nome" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-12 col-md-6 offset-md-3">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input id="email" type="email" name="email" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-12 col-md-6 offset-md-3">
                        <div class="form-group">
                            <label for="msg">Mensagem:</label>
                            <textarea id="msg" class="form-control" name="mensagem"></textarea>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-12 col-md-6 offset-md-3">
                        <input type="submit" value="Enviar" name="formSendMail" class="btn btn-primary btn-block">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script src="../js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>

