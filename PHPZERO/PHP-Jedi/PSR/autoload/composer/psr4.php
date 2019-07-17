<?php
//Nome do arquivo deve sempre ser igual ao nome da classe

//autoloader
//PSR-4

require 'vendor\autoload.php';


$cliente = new app\Clientes\Clientes();
$produto = new app\Produtos\Produto();

echo $cliente->getName();
echo "<br>";
echo $produto->getDescricao();
