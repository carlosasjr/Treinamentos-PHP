<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 23/05/2019
 * Time: 10:25
 */
require 'Pessoa.class.php';

use SUPER\Pessoa;

$usuario = Pessoa::getInstancia();

$usuario->setNome("Carlos");

$novousuario = Pessoa::getInstancia();
$novousuario->setNome('novo');

echo $usuario->getNome();

