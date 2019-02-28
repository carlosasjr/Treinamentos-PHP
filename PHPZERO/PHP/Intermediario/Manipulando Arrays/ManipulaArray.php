<?php
header("Content-type: text/php charset=utf-8");

$nomes = array("nome" => 'Carlos',
    'idade' => 90,
    'cidade' => 'Aparecida',
    'pais' => 'Brasil');
print_r($nomes);
echo '<br>';

//pegar as chaves do array
$chave = array_keys($nomes);
print_r($chave); //nome, idade, cidade, pais
echo '<br>';


//pegar os valores do array
$valores = array_values($nomes);
print_r($valores); //Carlos, 90, Aparecida, Brasil
echo '<br>';


//remover o ultimo registro
array_pop($nomes); //removeu o 'pais' => 'Brasil'
print_r($nomes);
echo '<br>';

//remove ro primeiro registro
array_shift($nomes); //removeu o 'nome' > 'Carlos';
print_r($nomes);
echo '<br>';


$nome = array('José', 'Maria', 'Alexandre', 'Zequinha');
//ordenar o array pelo valores mantendo o indice
asort($nome);
print_r($nome);
echo '<br>';

//ordenar o array de forma decrescente pelo valores mantendo o indice
arsort($nome);
var_dump($nome);
echo '<br>';


//retorna a quantidade de registros
echo 'Total de nomes: ' . count($nome);
echo '<br>';

//procura um valor no array
if (in_array('Zequinha',$nome)) {
    echo 'O Zequinha foi encontrado';
} else {
    echo 'O Zequinha não foi encontrado';
}
