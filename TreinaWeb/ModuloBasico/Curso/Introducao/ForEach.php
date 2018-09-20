<?php
$clientes = ['Carlos', 'Maria', 'José', 'Pedro'];

foreach ($clientes as $nomes):
    echo "{$nomes} <br>";
endforeach;

echo "<br>";


$clientes = [
    "Nome" => 'Carlos',
    "Endereco" => 'Rua Isaac',
    "Telefone" => '9999-0000'
];

foreach ($clientes as $campo => $valor):
    echo "{$campo} = {$valor} <br>";
endforeach;

echo "<br>";
echo "<br>";


$clientes = [
    [
        "Nome" => 'Carlos',
        "Endereco" => 'Rua Isaac',
        "Telefone" => '9999-0000'
    ],
    [
        "Nome" => 'Maria',
        "Endereco" => 'Rua Teste',
        "Telefone" => '8888-0000'
    ]
];

foreach ($clientes as $nome => $dados):

    foreach ($dados as $key => $value) :
        echo "{$key} = {$value} <br>";
    endforeach;

    echo "<br>";
endforeach;

echo "<br>";

$clientes = new stdClass();

$clientes->Nome = 'Carlos';
$clientes->Endereco = 'Rua Isaac Julio Barreto';
$clientes->Numero = 229;


foreach ($clientes as $prop => $valor):
    echo "{$prop}: {$valor} <br>";
endforeach;


echo "<br>";


$usuario = [
    1 => 'Carlos',
    2 => 'Maria',
    3 => 'Jose',
    4 => 'Mateus'
];
?>

<select>

<?php
foreach ($usuario as $key => $value):
    echo "<option value=\"$key\">$value</option>";
endforeach;
?>

</select>





