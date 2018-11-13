<?php

function Abrir($file = null){
  if(!$file):
      die('Parêmtro não informado');
  endif;
  
  if(!file_exists($file)):
      die('Arquivo não existe');
  endif;
  
  if (!$retorno = @file_get_contents($file)):
      die('Impossível ler o arquivo');
  endif;
  
  return $retorno;
}


$arquivo = Abrir('/tmp/arquivo.dat');
echo $arquivo;
