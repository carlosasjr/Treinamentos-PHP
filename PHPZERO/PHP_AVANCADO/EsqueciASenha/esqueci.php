<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 27/03/2019
 * Time: 10:03
 */

require_once 'config.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados) && $dados['email']) {
    $email = $dados['email'];

    $sql = 'SELECT id, email FROM usuarios WHERE email = :email';
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':email', $email);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $sql = $sql->fetch();

        $id = $sql['id'];

        $token = md5(time() . rand(0, 99999) . rand(0, 99999));

        $sql = 'INSERT INTO usuarios_token (id_usuario, hash, expirado_em) VALUES (:id_usuario, :hash, :expirado_em)';

        $sql = $pdo->prepare($sql);
        $sql->bindValue(':id_usuario', $id);
        $sql->bindValue(':hash', $token);
        $sql->bindValue(':expirado_em', date('Y-m-d H:i', strtotime('+2 months')));
        $sql->execute();

        $link = "http://localhost/Treinamentos/PHPZERO/PHP_AVANCADO/EsqueciASenha/redefinir.php?token=" . $token;

        $mensagem = "Acesse seu e-mail e clique no link para redefinir sua senha: <br>" . $link;


        $assunto = 'Redefinição de senha';
        $headers = 'From: contato@carlosasjr.com.br' . '\r\n' .
                   'XMailer: PHP/' . phpversion();

        //mail($email, $assunto, $mensagem, $headers);

        echo $mensagem;
        exit;

    } else {
        echo "Email não encontrado";
        exit;
    }

}


?>

<form method="post">
    Qual seu e-mail?<br>
    <input type="email" name="email"><br>

    <input type="submit" value="Enviar">
</form>
