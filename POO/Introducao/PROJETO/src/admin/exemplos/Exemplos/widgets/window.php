<?php
require '../../../../../public/index.php';

use App\widgets\TWindow;
use App\widgets\TParagraph;
use App\widgets\TImage;

//instancia um objeto TWindow nas coordenas 20, 20 contendo um texto
$janela1 = new TWindow('janela1');
$janela1->setPosition(20, 20);
$janela1->setSize(200, 200);
$janela1->add(new TParagraph('conteúdo da janela 1'));
$janela1->show();


$janela2 = new TWindow('janela2');
$janela2->setPosition(300, 20);
$janela2->setSize(200, 200);
$janela2->add(new TImage("../../../../imagens/familia.jpg"));
$janela2->show();
