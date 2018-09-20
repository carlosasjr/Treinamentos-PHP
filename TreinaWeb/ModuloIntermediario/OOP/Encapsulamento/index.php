<?php
require "./Cliente.class.php";
require "./ClientePF.class.php";

$meuCliente = new Cliente();
$meuCliente->nome = 'Carlos';
$meuCliente->setEmail('carlos@theplace.com.br');

$pf = new ClientePF();
$pf->setInfo('Informações');

$pf->getInfo();



