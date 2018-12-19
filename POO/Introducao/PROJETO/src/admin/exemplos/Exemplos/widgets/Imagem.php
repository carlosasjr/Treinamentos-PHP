<?php
require '../../../../../public/index.php';

use App\widgets\TImage;

//instancia objeto imagem
$bolo = new TImage('../../../../imagens/bolo1.jpg');
$bolo->width = '250px';
$bolo->height = '250px';
//exibe imagem
$bolo->show();


$familia = new TImage('../../../../imagens/familia.jpg');
$familia->width = '250px';
$familia->height = '250px';
//exibe imagem
$familia->show();