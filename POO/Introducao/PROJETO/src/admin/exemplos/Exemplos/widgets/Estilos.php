<?php
require '../../../../../public/index.php';

use App\widgets\TStyle;

//instancia objeto TStyle
//define características de um estilo chamado texto
$estilo1 = new TStyle('texto');
$estilo1->font_family = 'arial, verdana, sans-serif';
$estilo1->font_style = 'normal';
$estilo1->font_wigth = 'bold';
$estilo1->color = 'white';
$estilo1->text_decoration = 'none';
$estilo1->font_size = '10pt';

//instancia objeto TStyle
//define características de um estilo chamado celula
$estilo2 = new TStyle('celula');
$estilo2->background_color = 'white';
$estilo2->padding_top = '10px';
$estilo2->padding_bottom = '10px';
$estilo2->padding_left = '10px';
$estilo2->padding_rigth = '10px';
$estilo2->margin_left = '5px';
$estilo2->width = '142px';
$estilo2->height = '154px';

//exibe estilos na tela
$estilo1->show();
$estilo2->show();


