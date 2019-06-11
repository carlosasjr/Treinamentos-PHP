<?php

require 'config.php';
?>
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

<div class="container">
    <div class="notificacoes">0</div>
    <div class="lista" style="display: none">
        <ul class="list-group">
            <li class="list-group-item">item 1</li>
            <li class="list-group-item">item 1</li>
        </ul>
    </div>
    <hr>


    <button class="btn btn-primary addNotif">Criar Notificação</button>
</div>


<script>var BASE_URL = '<?php echo BASE_URL; ?>';</script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>

