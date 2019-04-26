<?php

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if ($dados) {

    $email = $dados['email'];
    $senha = $dados['senha'];

    $result = array();

    if ($email == 'carlos@hotmail.com' && $senha == '123') {
        $result['erro'] = false;
    } else {
        $result['erro'] = true;
    }

    $result['dados'] = $dados;
    echo json_encode($result);
}
