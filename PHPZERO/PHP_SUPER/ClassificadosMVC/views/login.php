<div class="container">
    <h1>Login</h1>

    <?php
    if (!empty($msg)) {
        echo $msg;
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
