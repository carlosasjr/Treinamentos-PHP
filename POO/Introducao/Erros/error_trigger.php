<?php

function Abrir($arquivo = null) {
    if (!$arquivo):
        trigger_error('Falta o parâmetro com o nome do arquivo!', E_USER_NOTICE);
        return false;
    endif;

    if (!file_exists($arquivo)):
        trigger_error('Arquivo não existe', E_USER_ERROR);
        return false;
    endif;

    if (!$retorno = @file_get_contents($arquivo)):
        trigger_error('Impossível ler o arquivo', E_USER_WARNING);
        return false;
    endif;

    return $retorno;
}

function manipula_erro($numero, $mensagem, $arquivo, $linha) {
    //escreve no logo todo tipo de erro   
    /* $log = fopen('erros.log', 'a');
      fwrite($log, $arquivo . ' linha: ' .$linha . ' ' . $mensagem);
      fclose($log); */

    $mensagem = "Arquivo: $arquivo : linha: $linha # no. $numero :  $mensagem \n";
    file_put_contents('erros.log', $mensagem, FILE_APPEND);

    //se for uma warning
    if ($numero == E_USER_WARNING):
        echo $mensagem;

    elseif ($numero == E_USER_NOTICE):
        echo $mensagem;

    elseif ($numero == E_USER_ERROR):
        echo $mensagem;
        die;

    endif;
}

set_error_handler('manipula_erro');


$arquivo = Abrir('/tmp/arquivo.dat');
echo $arquivo;
