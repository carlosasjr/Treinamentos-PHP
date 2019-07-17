<?php
//Nome do arquivo deve sempre ser igual ao nome da classe

//autoloader
//PSR-4
spl_autoload_register(function ($class) {
    $base_dir = __DIR__ . '/pacotes/';

    //inverte o caminho do namespace
    $file = $base_dir . str_replace('\\', '/', $class) . '.class.php';

    if (file_exists($file)) {
        require($file);
    }
});

use Loja\Clients\Cliente;
use Loja\Products\Produtos;

$cliente = new Cliente();
$produto = new Produtos();

echo $cliente->getName();
echo "<br>";
echo $produto->getDescricao();
