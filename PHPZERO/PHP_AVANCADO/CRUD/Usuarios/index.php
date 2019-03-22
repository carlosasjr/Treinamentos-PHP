<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 22/03/2019
 * Time: 11:47
 */
require_once 'Usuario.class.php';

use CRUDD\Usuarios\Usuario;

/*$usuario = new Usuario();

$usuario->setNome('Carlos');
$usuario->setEmail('carlos@theplace.com.br');
$usuario->setSenha('123');
$usuario->setNome('Testador');
$usuario->salvar();*/

$usuario = new Usuario(2);
//echo "Meu nome é: " . $usuario->getNome();

$usuario->setSenha('321');
$usuario->salvar();

//$usuario->delete();
//echo 'usuário deletado';
