<?php

function Abrir($arquivo){
    if (!$arquivo):
        return false;
    endif;
    
    if (!file_exists($arquivo)):
        return false;
    endif;
    
    if (!$retorno = @file_get_contents($arquivo)):
        return False;
    endif;
    
    return $retorno;
}

$arquivo = Abrir('Readme.txt');

if (!$arquivo):
    echo 'Falha ao abrir o arquivo';
else:
    echo $arquivo;
endif;
