<?php require 'pages/header.php'; ?>

<?php
require 'classes/Anuncios.class.php';
require 'classes/Usuarios.class.php';
$a = new Anuncios();
$u = new Usuarios();

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($id) {
    $info = $a->getAnuncio($id);
} else {
    ?>
    <script type="text/javascript">window.location.href = "login.php"</script>
    <?php
    exit;
}

?>
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-5">

            <div class="slide carousel" data-ride="carousel" id="meuCarousel">

                <ol class="carousel-indicators">

                    <?php foreach ($info['fotos'] as $chave => $foto) : ?>
                        <li class="<?php echo ($chave == 0) ? 'active' : ''  ?>" data-target="#meuCarousel" data-slide-to="<?= $chave ?>"></li>
                    <?php endforeach;?>


                </ol>


                <div class="carousel-inner" role="listbox">
                    <?php foreach ($info['fotos'] as $chave => $foto) : ?>
                    <div class="carousel-item <?php echo ($chave == 0) ? 'active' : ''  ?>">
                        <img src="assets/images/anuncios/<?= $foto['url'] ?>" border="0">
                    </div>
                    <?php endforeach;?>
                </div>
            </div>

        </div>
        <div class="col-sm-7">
            <h1><?= $info['titulo'] ?></h1>
            <h4><?= $info['categoria'] ?></h4>
            <p><?= $info['descricao'] ?></p>
            <br>
            <h3>R$ <?php echo number_format($info['valor'], 2, ',', '.') ?></h3>
            <h4>Telefone: <?= $info['telefone'] ?></h4>

        </div>
    </div>
</div>

<?php require 'pages/footer.php'; ?>


