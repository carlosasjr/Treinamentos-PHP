<?php

include_once './PROJETO/APP.CONFIG/Config.inc.php';

try {
    TTransaction::Open();

    $conn = TTransaction::Get();

    $criterio = new TCriterio();
    $criterio->add(new TFilter('codigo', '>', '0'));
    $criterio->setProperty('offset', 2);
    $criterio->setProperty('limit', 6);
    $criterio->setProperty('order', 'nome');

    $sql = new TSQLSelect('famosos', $criterio);
    $sql->addColumn('codigo');
    $sql->addColumn('nome');
    
    $sql->Execute($conn);

    foreach ($sql->Result as $key => $value) {
        echo "{$value['codigo']} = {$value['nome']} <br>";
    }

    TTransaction::Close();
    
} catch (Exception $exc) {    
    TTransaction::Rollback();
    echo $exc->getTraceAsString();
}

