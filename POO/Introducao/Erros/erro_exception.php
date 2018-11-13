<?php

function Abrir($arquivo = null){
    if (!$arquivo):
        throw new Exception('Falta o parêmtro com o nome do arquivo');
    endif;
    
    if (!file_exists($arquivo)):
        throw new Exception('Arquivo não existente');
    endif;
    
    if (!$retorno = @file_get_contents($arquivo)):
        throw  new Exception('Impossivel ler o arquivo');
    endif;
    
    return $retorno;
}

//tratamento de exceções

try {
    $arquivo= Abrir('/tmp/arquivo.dat');
    echo $arquivo;
   
  //captura o erro  
} catch (Exception $execao) {   
    echo $execao->getFile() . ':' . $execao->getLine() . ' # ' . $execao->getMessage();
}


