<a class="btn btn-primary" href="<?php echo BASE_URL ?>contatos/add">Adicionar</a>
<br>
<br>

<?php if ($del == 'true') : ?>
    <div class="aviso">Contato excluido com sucesso</div>
<?php endif; ?>

<table class="table table-hover table-striped" border="1" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($lista as $item) : ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['nome'] ?></td>
                <td><?= $item['email'] ?></td>
                <td>
                    <a class="btn btn-dark" href="<?php echo BASE_URL ?>contatos/edit/<?= $item['id'] ?>">Editar</a>
                    <a class="btn btn-danger" href="<?php echo BASE_URL ?>contatos/del/<?= $item['id'] ?>">Excluir</a>
                </td>

            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
