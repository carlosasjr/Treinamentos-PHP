<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 24/05/2019
 * Time: 17:41
 */


require 'Template.class.php';

$tpl = new Template('tpl_exemplo.html');

$dados = [
    'titulo' => 'Meu titulo do template',
    'nome' => 'Carlos',
    'idade' => 34
];

$tpl->render($dados);
