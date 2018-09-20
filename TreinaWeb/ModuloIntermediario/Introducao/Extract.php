<?php

$nome = 'Carlos';

$dados = [
    'nome' => 'TreinaWeb',
    'email' => 'treinaweb@treinaweb.com.br',
    'telefone' => '99-9999-9999',
    'site' => 'http://www.treinaweb.com.br'
];

//o extract transforma as chavees em variaveis

//extract($dados);

//porem é perigoso usar o extract sem uma protecao
//neste caso o extract sobrebos a variave $nome que tenho outro valor
// neste caso o ideial é usar o extract com um prefixo no nome da variavel extraida

extract($dados,EXTR_PREFIX_ALL, 'v');
// é adicionado o prefixo v_ antes do nome da variavel


echo $nome . '<br>';
echo $v_nome . '<br>';
echo $v_email . '<br>';
echo $v_telefone . '<br>';
echo $v_site . '<br>';

