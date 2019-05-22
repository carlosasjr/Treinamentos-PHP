<?php require 'pages/header.php'; ?>

<?php
if (empty($_SESSION['cLogin'])) {
    ?>
    <script type="text/javascript">window.location.href = "login.php"</script>
    <?php
    exit;
}

?>
    <div class="container">
        <h1>Meus Anuncios</h1>

        <a href="add-anuncio.php" class="btn btn-dark">Adicionar Anúncio</a>

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
            require 'classes/Anuncios.class.php';
            $a = new Anuncios();
            $anuncios = $a->getMeusAnuncios();

            foreach ($anuncios as $anuncio) :
                ?>
                <tr>
                    <td>
                        <?php if (!empty($anuncio['url'])) : ?>

                            <img src="assets/images/anuncios/<?= $anuncio['url'] ?>" border="0" height="50">

                        <?php else : ?>
                            <img src="assets/images/anuncio.jpg" border="0" height="50">
                        <?php endif; ?>
                    </td>
                    <td><?= $anuncio['titulo'] ?></td>
                    <td>R$ <?php echo number_format($anuncio['valor'], 2, ',', '.') ?></td>
                    <td>
                        <a class="btn btn-dark" href="editar-anuncio.php?id=<?= $anuncio['id'] ?>">Editar</a>
                        <a class="btn btn-danger" href="excluir-anuncio.php?id=<?= $anuncio['id'] ?>">Excluir</a>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>

            </tbody>


        </table>

    </div>

<?php require 'pages/footer.php'; ?>