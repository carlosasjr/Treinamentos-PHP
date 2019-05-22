<?php require 'pages/header.php'; ?>

<div class="container">
    <h1>Cadastre-se</h1>

    <?php
    require 'classes/Usuarios.class.php';
    $usuario = new Usuarios();

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (!empty($dados) && $dados['btnCadastro']) {
        $nome = $dados['nome'];
        $email = $dados['email'];
        $senha = $dados['senha'];
        $telefone = $dados['telefone'];

        unset($dados['btnCadastro']);


        if (in_array('', $dados)) {
            ?>

            <div class="alert alert-warning">
                Preencha todos os campos
            </div>

            <?php
        } else {
            if ($usuario->cadastrar($nome, $email, $senha, $telefone)) {
                ?>

                <div class="alert alert-success">
                    <strong>Parabéns!</strong>  Cadastrado com sucesso.
                    <a href="login.php">Faça o login agora.</a>
                </div>

                <?php
            } else {
                ?>
                <div class="alert alert-warning">
                    Usuário já existe.

                    <a href="login.php">Faça o login agora.</a>
                </div>
    <?php
            }
        }
    }

    ?>


    <form method="post" name="frmCadastro">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>


        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control">
        </div>


        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control">
        </div>

        <input type="submit" value="Cadastrar" class="btn btn-primary" name="btnCadastro">
    </form>
</div>

<?php require 'pages/footer.php'; ?>
