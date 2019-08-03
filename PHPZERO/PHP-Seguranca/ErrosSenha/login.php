<?php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

session_start();


if (!empty($dados) && $dados['frmLogin']) {
    $email = $dados['email'];
    $senha = $dados['senha'];

    if (isset($_SESSION['login_tentativas']) && $_SESSION['login_tentativas'] >= 3) {
        echo "Seu acesso está bloqueado!";
    } else {
        if ($email == 'teste@hotmail.com' && $senha == '123') {
            echo "Acesso ok";
        } else {
            if (!isset($_SESSION['login_tentativas'])) {
                $_SESSION['login_tentativas'] = 0;
            }

            $_SESSION['login_tentativas']++;


            echo "Senha ou email incorretos! Tentativas: " . $_SESSION['login_tentativas'];
        }

        echo '<hr>';
    }
}
?>

<form a method="post">
    Email: <br>
    <input type="email" name="email" id="email"> <br>

    Senha: <br>
    <input type="password" name="senha" id="senha"> <br>

    <input type="submit" value="Entrar" name="frmLogin">
</form>

