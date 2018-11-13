<?php

require_once './class/Produto.class.php';

$produto = new Produto(1, 'Pendriver', 1, 345.67);

echo $produto->Preco;

