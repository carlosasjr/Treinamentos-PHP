<?php

require './config.php';
require './lib/funcs.php';

$nome = strtoupper(trim($_POST['cliente']));
$totalhoras = trim($_POST['totalhoras']);
$valorhora = trim($_POST['valorhora']);

$erro = 0;

if (strlen($nome) < 3):
    $erro++;
endif;

if (strlen($totalhoras) == 0 || !is_numeric($totalhoras)):
    $erro++;
endif;

if (strlen($valorhora) == 0 || !is_numeric($valorhora)):
    $erro++;
endif;

if ($erro):
    header('Location: index.php?pagina=criar&erro=1');
endif;

$conn = connecta();

$insert = "INSERT INTO tbl_orcamentos (cliente, totalhoras, valorhora) VALUES (" .
        " '$nome', '$totalhoras', '$valorhora')";

var_dump($insert);

$resultado = mysqli_query($conn, $insert);

if ($resultado) :

    header('Location: index.php?pagina=criar&sucesso=1');
    exit;
else :
    var_dump($sql);  
//  header('Location: index.php?pagina=criar&erro=1');   
   // exit;
endif;


