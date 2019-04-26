<?php

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if ($dados) {
    $valor1 = $dados['x'];
    $valor2 = $dados['y'];

    $result = $valor1 + $valor2;
    echo $result;

}

