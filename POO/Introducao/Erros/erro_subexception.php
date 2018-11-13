<?php


function Abrir($arquivo = null){
    if (!$arquivo):
        throw new ParameterException('Falta o parêmtro com o nome do arquivo');
    endif;
    
    if (!file_exists($arquivo)):
        throw new FileNotFoundException('Arquivo não existente');
    endif;
    
    if (!$retorno = @file_get_contents($arquivo)):
        throw  new FilePermissionException('Impossivel ler o arquivo');
    endif;
    
    return $retorno;
}

class ParameterException extends Exception{};
class FileNotFoundException extends Exception{};
class FilePermissionException extends Exception{};



//tratamento de exceções

try {
    $arquivo= Abrir('/tmp/arquivo.dat');
    echo $arquivo;
   
  //captura o erro  
} catch (ParameterException $execao) {   
    //não faz nada...
}
catch (FileNotFoundException $execao){
    var_dump($execao->getTrace());
    echo "finalizando a aplicação...\n";
    die;
}

catch (FilePermissionException $execao) {   
   echo $execao->getFile() . ':' . $execao->getLine() . ' # ' . $execao->getMessage();
}