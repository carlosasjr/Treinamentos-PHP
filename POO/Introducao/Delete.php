<?php

include_once './PROJETO/Config.inc.php';   

$criterio = new TCriterio();
$criterio->add(new TFilter('codigo', '=', 2));

$delete = new TSQLDelete('famosos');
$delete->Execute();

if ($delete->Result):
    echo 'Registro deletado.';
endif;

