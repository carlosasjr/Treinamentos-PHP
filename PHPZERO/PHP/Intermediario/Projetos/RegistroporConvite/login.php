<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 25/02/2019
 * Time: 16:52
 */

session_start();
require_once 'config.php';


$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados) && $dados['formSubmit']) {
    unset($dados['formSubmit']);

    $email = $dados['email'];
    $senha = md5($dados['senha']);

    $sql = "SELECT * FROM usuarios WHERE email = :email and senha = :senha";

    $sql = $pdo->prepare($sql);

    $sql->bindValue(':email', $email, PDO::PARAM_STR);
    $sql->bindValue(':senha', $senha, PDO::PARAM_STR);

    $sql->execute();

    if ($sql->rowCount() > 0) {
        $usuario = $sql->fetch();

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['email'] = $usuario['email'];

        header('Location: index.php');
    } else {
        echo 'Usuário inválido';
    }

}


?>


Página de login
<br>
<br>

<form method="post">
    <label class="label"> <br>
        <span class="field">E-mail:</span>
        <input type="text" name="email"/>
    </label>
    <br>
    <br>

    <label class="label"> <br>
        <span class="field">Senha:</span>
        <input type="password" name="senha"/>
    </label>
    <br>
    <br>

    <input type="submit" value="Entrar" name="formSubmit"> <a href="cadastrar.php"> Cadastrar</a>
</form>