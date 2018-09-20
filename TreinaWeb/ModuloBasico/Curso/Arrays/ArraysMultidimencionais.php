<?php

$arr = [
    1 => 'Teste 1',
    2 => 'Teste 2',
    3 => 'Teste 3'
];

echo $arr[1];

echo '<hr>';

$arr = [
    1 => [
        1 => 'Teste1_1',
        2 => 'Teste1_2'
    ],
    2 => 'Teste 2',
    3 => 'Teste 3'
];

echo $arr[1][2];

echo '<hr>';

$clientes = [
    ['nome' => 'Carlos',
     'endereco' => 'Rua isaac julio barreto, 329',
     'telefones' => [
            'comercial' => '1223-555',
            'residencial' => '99999-555'
        ]
    ]
];

print_r($clientes);
echo "<br>";

echo $clientes[0]['nome'];
echo "<br>";
echo $clientes[0]['telefones']['residencial'];


$bool = FALSE;

var_dump((string) $bool);

