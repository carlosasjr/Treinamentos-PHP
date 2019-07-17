<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 12/07/2019
 * Time: 14:29
 */

require 'classes.class.php';

$olheiro = new UsuarioObserver();

$usuario = new Usuario("Carlos");
$usuario->attach($olheiro);

echo "Meu nome é: " . $usuario->getName();
echo "<hr>";

$usuario->setName("José");

echo "Meu nome é: " . $usuario->getName();
echo "<hr>";

$usuario->detach($olheiro);

$usuario->setName('Marcelo');
echo "Meu nome é: " . $usuario->getName();
echo "<hr>";
