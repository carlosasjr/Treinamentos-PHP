<?php

var_dump(date('d/m/Y'));

//quebrando a data

$dia = date('d');
$mes = date('m');
$ano = date('Y');

echo $dia . '/' . $mes . '/' . $ano;

echo '<br>';

echo date("d") . "/" . date("m") . "/" . date("Y");

echo '<br>';

echo date('l') . ', ' . date('d') . ' de '. date('F') . ' de ' . date('Y') ;

var_dump(date("H:i:s"));

function retornaDataExtenso()
{
 $diaSemana = array('Domingo', 'Segunda-Feira', 'Terça-Feira', 'Quarta-Feira', 'Quinta-Feira', 'Sexta-Feira', 'Sábado');
    $mesAno = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho',
                    'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
    return $diaSemana[date('w')] . ", " . date('d') . " de " . $mesAno[date('n')-1] . " de " . date('Y');
}

echo retornaDataExtenso();
