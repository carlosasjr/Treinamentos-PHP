<h3>Adicionar</h3>

<?php if ($error == 'exist') : ?>
    <div class="aviso">E-mail já cadastrado</div>
<?php endif; ?>


<form method="post" action="<?php echo BASE_URL ?>contatos/save">

    <input type="hidden" name="id" value="<?= isset($dado['id']) ? $dado['id'] : '' ?>">

    <div class="form-group">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="<?= isset($dado['nome']) ? $dado['nome'] : '' ?>">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?= isset($dado['email']) ? $dado['email'] : '' ?>">
    </div>

    <input type="submit" value="<?=  isset($dado['id']) ? 'Salvar' : 'Adicionar' ?>">
</form>

