<?php require 'pages/header.php'; ?>

<?php
require 'classes/Anuncios.class.php';
require 'classes/Usuarios.class.php';
$a = new Anuncios();
$u = new Usuarios();

$porPagina = 2;
$total_anuncios = $a->getTotalAnuncios();
$total_usuario = $u->getTotalUsuarios();
$p = 1;

if (isset($_GET['p']) && !empty($_GET['p'])) {
    $p = addslashes($_GET['p']);
}

$total_paginas =  ceil($total_anuncios / $porPagina);

$anuncios = $a->getUltimosAnuncios($p, $porPagina);

?>

<div class="container-fluid">
    <div class="jumbotron">

        <h2>Nós temos hoje <?= $total_anuncios ?> anúncio(s)</h2>
        <p>Existe mais de <?= $total_usuario ?> usuário(s) cadastrado(s)</p>
    </div>

    <?php
    if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])) {
        echo $_SESSION['cLogin']['nome'] . " Seja bem vindo!";
    }
    ?>

    <div class="row">
        <div class="col-sm-3">
            <h4>Pesquisa Avançada</h4>
        </div>
        <div class="col-sm-9">
            <h4>Últimos Anúncios</h4>
            <table class="table table-striped">
                <tbody>
                <?php foreach ($anuncios as $anuncio): ?>
                    <tr>
                        <td>
                            <?php if (!empty($anuncio['url'])) : ?>

                                <img src="assets/images/anuncios/<?= $anuncio['url'] ?>" border="0" height="50">

                            <?php else : ?>
                                <img src="assets/images/anuncio.jpg" border="0" height="50">
                            <?php endif; ?>
                        </td>

                        <td>
                            <a href="produto.php?id=<?= $anuncio['id']; ?>"><?= $anuncio['titulo'] ?></a><br>
                            <?= $anuncio['categoria'] ?>
                        </td>
                        <td>R$ <?php echo number_format($anuncio['valor'], 2, ',', '.') ?></td>
                        <td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

            <ul class="pagination">
                <?php for($q=1; $q<=$total_paginas; $q++) : ?>
                <li class="page-item <?php echo ($p == $q) ? "active" : '' ?>"><a class="page-link" href="index.php?p=<?= $q; ?>"><?php echo ($q); ?></a> </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>

<?php require 'pages/footer.php'; ?>


