<?php
require '../../../../../public/index.php';

use App\widgets\TTable;

$dados = [
    [1, 'Maria Eugênia', 'http://www.maria.com.br', 1200],
    [2, 'Pedro Cardoso', 'http://www.pedro.com.br', 800],
    [3, 'João de Barro', 'http://www.joao.com.br', 1500],
    [4, 'Joana Pereira', 'http://www.joana.com.br', 700],
    [5, 'Erasmos Carlos', 'http://www.erasmos.com.br', 2500]
];

//instancia objeto tabela
$tabela = new TTable();

//define algumas propriedades
$tabela->width = 600;
$tabela->border = 1;

//instancia uma linha para o cabeçalho
$cabecalho = $tabela->addRow();

//define a cor de fundo
$cabecalho->bgcolor = '#a0a0a0'; //cor de fundo

//adiciona célular
$cabecalho->addCell('Código');
$cabecalho->addCell('Nome');
$cabecalho->addCell('Site');
$cabecalho->addCell('Salário');

$i = 0;
$total = 0;
//percorre os dados
foreach ($dados as $pessoa) :
    //verifica qual cor utilizar par ao fundo
    $bgcolor = ($i % 2) == 0 ? '#d0d0d0' : '#ffffff';

    //adiciona uma linha para os dados
    $linha = $tabela->addRow();
    $linha->bgcolor = $bgcolor;

    //adiciona as células
    $linha->addCell($pessoa[0]);
    $linha->addCell($pessoa[1]);
    $linha->addCell($pessoa[2]);
    $x = $linha->addCell($pessoa[3]);
    $x->aling = 'right';

    $total += $pessoa[3];
    $i ++;
endforeach;

//instancia uma linha para o totalizador
$linha = $tabela->addRow();

//adiciona células
$celula = $linha->addCell('Total');
$celula->colspan = 3;

$celula = $linha->addCell($total);
$celula->bgcolor = '#a0a0a0';
$celula->align = 'rigth';

//exibe a tabela
$tabela->show();
