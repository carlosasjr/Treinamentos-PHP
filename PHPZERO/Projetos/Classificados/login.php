<?php require 'pages/header.php'; ?>
<div class="container">
    <h1>Login</h1>

    <?php
    require 'classes/Usuarios.class.php';
    $usuario = new Usuarios();

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados) && $dados['btnCadastro']) {
        $email = $dados['email'];
        $senha = $dados['senha'];

        unset($dados['btnCadastro']);

        if ($usuario->login($email, $senha)) {
            ?>
            <!-- REDIRECIONAMENTO COM JAVA SCRIPT -->
            <script type="text/javascript">window.location.href = "./";</script>
        <?php
        } else {
        ?>
            <div class="alert alert-danger">
                Usuário e/ou senha inválidos
            </div>
            <?php
        }
    }
    ?>


    <form method="post" name="frmCadastro">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control">
        </div>

        <input type="submit" value="Entrar" class="btn btn-primary" name="btnCadastro">
    </form>
</div>

<?php require 'pages/footer.php'; ?>


