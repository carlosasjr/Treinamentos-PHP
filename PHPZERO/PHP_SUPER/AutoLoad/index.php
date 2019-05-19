<?php
spl_autoload_register(function ($class) {
    require 'classes/' . $class . '.class.php';
});

$cavalo = new Cavalo();
$pessoa = new Pessoa();

$pessoa->andar();
$cavalo->andar = 'Andou';


