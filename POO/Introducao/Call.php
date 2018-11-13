<?php
require_once './class/Produto.class.php';

$produto = new Produto(1, 'Pendriver', 1, 345.67);

//chamando um método que não existe para ser interceptado pelo metodo __call

$produto->Vender(10,23);
