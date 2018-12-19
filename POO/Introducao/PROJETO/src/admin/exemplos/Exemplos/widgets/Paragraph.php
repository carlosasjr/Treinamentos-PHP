<?php
require '../../../../../public/index.php';

use App\widgets\TParagraph;

//instancia objeto parágrafo
$texto = new TParagraph('teste1<br>teste1<br>teste1');
$texto->setAlign('left');
$texto->show();

//instancia objeto parágrafo
$texto2 = new TParagraph('teste1<br>teste1<br>teste1');
$texto2->setAlign('right');
$texto2->show();

