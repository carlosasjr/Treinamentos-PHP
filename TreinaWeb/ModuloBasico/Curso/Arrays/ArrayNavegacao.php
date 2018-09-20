<?php
$cursos = array("PHP","CSS3","HTML5","MySQL");

/*reset() – Aponta o ponteiro interno para o primeiro elemento do array e devolve o seu valor.
end() – Aponta o ponteiro interno para o último elemento do array e devolve o seu valor.
next() – Aponta o ponteiro interno para o próximo elemento do array e devolve o seu valor.
prev() – A ponta o ponteiro interno para o elemento anterior do array e devolve o seu valor. 
         Funciona de maneira inversa à função next().
current() – Devolve o valor do elemento atual do array, indicado pelo ponteiro interno.
key() - Funciona de maneira semelhante à função current() mas, ao invés de devolver o valor do 
        elemento indicado pelo ponteiro interno do array, devolve o seu índice/chave.
  */
 

var_dump( current($cursos) ); // Retorna: PHP
var_dump( next($cursos) ); // Retorna: CSS3
var_dump( key($cursos) ); // Retorna: Íncice do elemento atual = 1
var_dump( current($cursos) ); // Retorna: CSS3
var_dump( prev($cursos) ); // Retorna: PHP
var_dump( end($cursos) ); // Retorna: MySQL
var_dump( current($cursos) ); // Retorna: MySQL
var_dump( prev($cursos) ); // Retorna: HTML5
var_dump( key($cursos) ); // Retorna: Íncice do elemento atual = 2

function imprimeArray($array = []) {
    
    $count = count($array);
    
    reset($array);        
    
    for($i = 0; $i < $count; $i++):
        echo key($array) . ' - ' .  current($array) . '<br>';
        next($array);
    endfor;        
}

imprimeArray($cursos);
imprimeArray();



    
    
    
    
    
    

