<?php

$dados = [
    'nome' => 'TreinaWeb',
    'email' => 'treinaweb@treinaweb.com.br',
    'telefone' => '99-9999-9999',
    'site' => 'http://www.treinaweb.com.br'
];

// o comando $$ pega o valor de uma variavel e transforma em outra variavel com o valor da variavel
foreach ($dados as $key => $value) {
    $$key = $value;
}


echo $nome; // imprime TreinaWeb
