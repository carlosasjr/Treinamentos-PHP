<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Meu Site</title>
</head>
<body>
<h1>Este é o topo</h1>
<a href="<?php echo BASE_URL; ?>">Home</a>
<a href="<?php echo BASE_URL; ?>galeria">Galeria</a>
<a href="<?php echo BASE_URL; ?>galeria/buscar/1">Galeria Item</a>
<hr>

    <?php $this->loadViewInTemplate($viewName, $viewData) ?>

</body>
</html>

