<?php
require 'config.php';

global $db;

$id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

sleep(1);
if (isset($id) && !empty($id)) {
    $sql = "SELECT * FROM usuarios WHERE id = {$id}";
    $sql = $db->query($sql);

    if ($sql->rowCount() > 0) {
        $info = $sql->fetch();
        ?>

        <form id="formUsuario" method="post">
            <input type="hidden" value="<?= $info['id'] ?>" name="id" id="id">

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" value="<?= $info['nome'] ?>" name="nome" id="nome" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" value="<?= $info['email'] ?>" name="email" id="email" class="form-control">
            </div>


            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="text" value="<?= $info['senha'] ?>" name="senha" id="senha" class="form-control">
            </div>

            <input type="submit" value="Salvar">


        </form>

        <?php

    }
}

?>



