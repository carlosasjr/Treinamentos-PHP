<?php

require './config.php';
require './lib/funcs.php';

$nome = strtoupper(trim($_POST['cliente']));
$totalkwh = trim($_POST['totalkwh']);
$tipoConsumidor = trim($_POST['tipoconsumidor']);

$erro = 0;

if (strlen($nome) < 3):
    $erro++;
endif;

if (strlen($totalkwh) == 0 || !is_numeric($totalkwh)):
    $erro++;
endif;

if (isset($tipoconsumidor)):
    $erro++;
endif;

if ($erro):
    header('Location: index.php?pagina=criar&erro=1');
endif;

$conn = connecta();

$insert = "INSERT INTO cpagar (nome, kwh, tipoconsumidor) VALUES (" .
        " '$nome', '$totalkwh', '$tipoConsumidor')";

var_dump($insert);

$resultado = mysqli_query($conn, $insert);

if ($resultado) :

    header('Location: index.php?pagina=criar&sucesso=1');
    exit;
else :
  header('Location: index.php?pagina=criar&erro=1');   
    exit;
endif;


