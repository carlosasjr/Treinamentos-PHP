<?php

$erro = [
    'tipo' => 'Email',
    'codigo' => '01',
    'descricao' => 'O remetente não foi informado.'
];



echo $erro['tipo'] . ' ' . $erro['codigo'] . ' ' . $erro['descricao'] ;
echo '<br>';

extract($erro);

echo $tipo . ' ' . $codigo . ' ' . $descricao ;
echo '<br>';
echo '<br>';

$frase = vsprintf("Tipo = %s Codigo = %s Descricao = %s", $erro);
echo $frase;

echo '<br>';

$valor = 501.21;

$frase = sprintf('%.2f', $valor);
echo $frase;


