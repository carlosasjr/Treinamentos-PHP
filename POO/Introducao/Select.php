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


$select2 = new TSQLSelect();
$select2->FullSQL('SELECT * FROM famosos WHERE codigo = 33');

$famosos = $select2->Result;

echo '<hr>';

if ($famosos) :
foreach ($famosos as $key => $value) {
    extract($value);
    echo  $nome . '<br>';
} else:
 echo 'Nenhum Registro '    ;
endif;




