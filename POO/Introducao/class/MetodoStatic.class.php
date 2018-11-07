<?php

/**
 * MetodoStatic.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Carlos Junior
 */
class MetodoStatic {
/* * ************************************************ */
/* * ************* METODOS PRIVADOS ***************** */
/* * ************************************************ */


/* * ************************************************ */
/* * ************* METODOS PUBLICOS ***************** */
/* * ************************************************ */
    
 static function Sobre()   {
     $fd = fopen('readme.txt', 'r');
     
     while($linha = fgets($fd,200)):
         echo $linha . '<br>';
     endwhile;
 }
}
