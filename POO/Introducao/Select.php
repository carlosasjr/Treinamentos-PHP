<?php

include_once './PROJETO/Config.inc.php';   

$select = new TSQLSelect('famosos');
$select->addColumn('nome');

$criterio = new TCriterio();
$criterio->add(new TFilter('codigo', '=', 9));
$select->setCriterio($criterio);

$select->Execute();
$famosos = $select->Result;

foreach ($famosos as $key => $value) {
    extract($value);
    echo  $nome . '<br>';
}


