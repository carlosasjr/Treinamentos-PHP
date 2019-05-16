<?php
require 'config.php';

if (empty($_SESSION['cLogin'])) {
    header("Location: login.php");
}

require 'classes/Anuncios.class.php';

$idAnuncio = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);


if ($idAnuncio) {
    $anuncio = new Anuncios();
    $id_anuncio = $anuncio->excluirFoto($idAnuncio);
}

if (isset($id_anuncio)) {
    header("Location: editar-anuncio.php?id=" . $id_anuncio);
} else {
    header("Location: meus-anuncios.php");
}
