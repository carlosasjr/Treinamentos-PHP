<div class="container">
    <h1>Meus Anuncios</h1>

    <a href="<?php echo BASE_URL; ?>anuncios/adicionar" class="btn btn-dark">Adicionar Anúncio</a>

    <br>
    <br>
    <table class="table table-striped">
        <thead
        ">
        <tr>
            <th>Foto</th>
            <th>Titulo</th>
            <th>Valor</th>
            <th>Ações</th>
        </tr>
        </thead>

        <tbody>
        <?php

        foreach ($anuncios as $anuncio) :
            ?>
            <tr>
                <td>
                    <?php if (!empty($anuncio['url'])) : ?>

                        <img src="<?php echo BASE_URL; ?>assets/images/anuncios/<?= $anuncio['url'] ?>" border="0" height="50">

                    <?php else : ?>
                        <img src="<?php echo BASE_URL; ?>assets/images/anuncio.jpg" border="0" height="50">
                    <?php endif; ?>
                </td>
                <td><?= $anuncio['titulo'] ?></td>
                <td>R$ <?php echo number_format($anuncio['valor'], 2, ',', '.') ?></td>
                <td>
                    <a class="btn btn-dark" href="<?php echo BASE_URL; ?>anuncios/editar/<?= $anuncio['id'] ?>">Editar</a>
                    <a class="btn btn-danger" href="<?php echo BASE_URL; ?>anuncios/excluir/<?= $anuncio['id'] ?>">Excluir</a>
                </td>
            </tr>
        <?php
        endforeach;
        ?>

        </tbody>


    </table>

</div>