<?php

include_once './PROJETO/Config.inc.php';  

$famosos = ['nome' => 'Samuel Henrique'];

$criterio = new TCriterio();

$criterio->add(new TFilter('codigo', '=', 3));

$update = new TSQLUpdate('famosos', $famosos, $criterio);
$update->Execute();

if ($update->Result):
    echo "Alterado com sucesso..";
endif;

