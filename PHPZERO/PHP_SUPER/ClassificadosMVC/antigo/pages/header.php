<?php require "config.php"; ?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Classificados</title>
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!--  -->

    <a class="navbar-brand" href="./">Classificados</a>

    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarMenu">
        <div class="navbar-nav">

        </div>
    </div>

    <div class="navbar-nav">

        <?php if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])) : ?>
            <a href="meus-anuncios.php" class="nav-item nav-link">Meus Anúncios</a>
            <a href="sair.php" class="nav-item nav-link">Sair</a>
        <?php else : ?>
            <a href="cadastre-se.php" class="nav-item nav-link">Cadastra-se</a>
            <a href="login.php" class="nav-item nav-link">Login</a>
        <?php endif; ?>


        <!--<a href="#" class="nav-item nav-link">Meus anuncios</a>
        <a href="#" class="nav-item nav-link">Sair</a>-->
    </div>
</nav>