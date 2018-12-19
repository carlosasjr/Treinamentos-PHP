<?php
require '../../../../../public/index.php';

use App\widgets\TTable;
use App\widgets\TParagraph;
use App\widgets\TImage;

//instancia objeto tabela com borde de 1 pixel
$tabela = new TTable();
$tabela->border = 1;

//acrescenta uma linha na tabela
$linha = $tabela->addRow();

//cria um objeto paragrafo
$paragrafo = new TParagraph('Este é meu bolo');
$paragrafo->setAlign('left');

//adiciona célula contendo o objeto
$linha->addCell($paragrafo);

//cria objeto imagem
$imagem = new TImage('logo-pequeno.png');
$linha->addCell($imagem);

//acrescenta mais uma linha
$linha2 = $tabela->addRow();

//cria outra parágrafo
$paragrafo = new TParagraph('Este é o logo do Gimp');
$paragrafo->setAlign('left');
$linha2->addCell($paragrafo);

$image = new TImage('logo-pequeno.png');
$linha2->addCell($imagem);

//acrecenta mais uma linha
$linha3 = $tabela->addRow();
//acrescenta uma célula que ocupará o espaço de duas
$celula = $linha3->addCell(new TParagraph('texto em duas colunas'));
$celula->colspan = 2;

//exibe a tabela
$tabela->show();