<?php
require '../../../../../public/index.php';

use App\widgets\TElement;
use App\widgets\TStyle;

//cria um estilo
$style = new TStyle('estilo_texto');
$style->color = '#FF0000';
$style->font_family = 'Verdana';
$style->font_size = '20pt';
$style->font_weight = 'bold';
$style->show();

//instancia um parágrafo
$texto = new TElement('p');
$texto->align = 'center';
$texto->add('Sport Club Internacinal');

//define o estilo do parágrafo
$texto->class = 'estilo_texto';
$texto->show();