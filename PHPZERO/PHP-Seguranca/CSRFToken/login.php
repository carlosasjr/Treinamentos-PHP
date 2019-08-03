<?php
session_start();

if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = md5(time() . rand(0, 9999));
}

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if ($dados['csr_token'] == $_SESSION['csr_token']) {
    if (!empty($dados) && $dados['frmLogin']) {
        $email = $dados['email'];
        $senha = $dados['senha'];

        if ($email == 'teste@hotmail.com' && $senha == '123') {
            echo "Acesso ok";
        } else {
            echo "Senha ou email incorretos! ";
        }

        echo '<hr>';
    }
} else {
    echo "Formulário inválido";
}


?>

<form a method="post">
    Email: <br>
    <input type="email" name="email" id="email"> <br>

    Senha: <br>
    <input type="password" name="senha" id="senha"> <br>

    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csr_token']; ?>">

    <input type="submit" value="Entrar" name="frmLogin">
</form>

