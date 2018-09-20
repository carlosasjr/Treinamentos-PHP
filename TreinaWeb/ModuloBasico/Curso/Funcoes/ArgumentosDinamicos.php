<?php

/*
 * func_num_args() – Retorna o número de argumentos passados para a função.

 * func_get_arg() – Retorna o valor de um argumento em particular, basta que seu índice seja informado.

 * func_get_args() – Retorna um array com todos os argumentos.

 */

function maiorNumero(){
    echo func_num_args() . ' Argumentos';
    echo '<br>';
    
    $numArg = func_num_args();
    
    for ($i=0; $numArg>$i; $i++):
        echo "Argumento {$i}: " . func_get_arg($i) . "<br>";
    endfor;      
}

maiorNumero(1,50,60);


function listaArgs(){
    $argumentos = func_get_args();
    
    foreach ($argumentos as $key => $value) {
        echo "{$key} = {$value} <br>";
    }
            
}

listaArgs(50,60,120);



function maximoValor()
{
   // Inicializa a variável com o valor negativo máximo de um inteiro
   $max = -PHP_INT_MAX;

   // Itera sobre os argumentos recebidos
   foreach(func_get_args() as $arg) {

      // O valor atual é maior que max? Se sim, o armazena na variável max
      if ($arg > $max) {
          $max = $arg;
      }

   }

   // Retorna o valor máximo encontrado
   return $max;
}

echo maximoValor(1,5,7000,6999);