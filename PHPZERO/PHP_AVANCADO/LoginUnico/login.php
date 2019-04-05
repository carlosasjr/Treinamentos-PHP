<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 05/04/2019
 * Time: 07:59
 */
session_start();
require_once 'config.php';
require_once 'class/Usuarios.class.php';

use LoginUnico\Usuarios;

$_SESSION['logado'] = '';
//echo  $_SERVER['HTTP_USER_AGENT'];

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados) && $dados['formLogin']) {
    $email = $dados['email'];
    $senha = md5($dados['senha']);

    $usuario = new Usuarios($pdo);

    if ($usuario->fazerLogin($email, $senha)) {
        header("Location: index.php");
        exit;
    } else {
        echo "E-Mail ou Senha Inválidos";
    }
}

?>

<h1>Login</h1>

<form method="post">
    <label>E-mail</label><br>
    <input type="email" name="email">
    <br>
    <br>
    <label>Senha</label><br>
    <input type="password" name="senha">
    <br>
    <br>
    <input type="submit" value="Entrar" name="formLogin">

</form>



