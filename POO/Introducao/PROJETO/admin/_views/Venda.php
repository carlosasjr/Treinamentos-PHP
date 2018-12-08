<?php

include_once '../../app.config/Config.inc.php';

$venda = new TVendas();

//adiciona alguns produtos
$venda->addItem(3, new TProduto('Vinho', 10, 15));
$venda->addItem(2, new TProduto('Salame', 20, 20));
$venda->addItem(1, new TProduto('Queijo', 30, 10));


//var_dump($venda);

echo $venda->finalizaVenda();
