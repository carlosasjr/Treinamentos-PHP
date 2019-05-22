<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Meu Site</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css ">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!--  -->

    <a class="navbar-brand" href="<?php echo BASE_URL; ?>">Classificados</a>

    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarMenu">
        <div class="navbar-nav">

        </div>
    </div>

    <div class="navbar-nav">

        <?php if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])) : ?>
            <a href="<?php echo BASE_URL; ?>anuncios" class="nav-item nav-link">Meus Anúncios</a>
            <a href="<?php echo BASE_URL; ?>login/sair" class="nav-item nav-link">Sair</a>
        <?php else : ?>
            <a href="<?php echo BASE_URL; ?>cadastrar" class="nav-item nav-link">Cadastra-se</a>
            <a href="<?php echo BASE_URL; ?>login" class="nav-item nav-link">Login</a>
        <?php endif; ?>


        <!--<a href="#" class="nav-item nav-link">Meus anuncios</a>
        <a href="#" class="nav-item nav-link">Sair</a>-->
    </div>
</nav>

<?php $this->loadViewInTemplate($viewName, $viewData) ?>


<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>

