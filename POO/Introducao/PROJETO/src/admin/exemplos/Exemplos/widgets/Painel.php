<?php
require '../../../../../public/index.php';

use App\widgets\TPanel;
use App\widgets\TParagraph;
use App\widgets\TImage;

//instancia um novo painel
$panel = new TPanel(400, 300);

//coloca objeto parágrafo na posição 10, 10
$texto = new TParagraph('isso é um teste, x:10, y:10');
$panel->put($texto, 10, 10);

//coloca objeto parágrafo na posição 200,200
$texto = new TParagraph('outro teste, x:200 y:200');
$panel->put($texto, 200, 200);

//coloca objeto imagem na posição 10, 180
$img = new TImage('logo-pequeno.png');
$panel->put($img, 10, 180);

//coloca objeto imagem na posição 240, 10
$img = new TImage('logo-pequeno.png');
$panel->put($img, 240, 10);
$panel->show();