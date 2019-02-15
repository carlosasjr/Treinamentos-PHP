<?php

$nome = array("Carlos", "Maria", "Samuel", "Gabriel");

foreach ($nome as $aluno) {
    echo $aluno . "<br>";
}

echo "<hr>";

$nome = array(
    array("nome" => "Carlos", "idade" => 32),
    array("nome" => "Maria", "idade" => 25),
    array("nome" => "Samuel", "idade" => 15),
    array("nome" => "Gabriel", "idade" => 9)
);

foreach ($nome as $aluno) {
    echo "Nome: " . $aluno['nome'] . " Idade: " . $aluno['idade'] . "<br>";
}


echo "<hr>";

$aluno = array(
    "nome" => 'Carlos',
    'idade' => '34',
    'estado' => 'SP',
    'pais' => 'Brasil'
);

foreach ($aluno as $chave => $valor) {
    echo "{$chave} = {$valor}  <br>";
}
