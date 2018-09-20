<?php

//inclui a classe de validação
include_once('validar.php');

$validador = new validar();

//verifica se a string é vazia
var_dump( $validador->temConteudo('não está vazia') );  		//retorna true
var_dump( $validador->temConteudo('') ); 						//retorna false

//verifica se possui tamanho mínimo
var_dump( $validador->tamanhoMinimo('possui tamanho mínimo', 5) );  //retorna true
var_dump( $validador->tamanhoMinimo('asd', 5) ); 			 		//retorna false

//verifica se possui tamanho máximo
var_dump( $validador->tamanhoMaximo('Não tamanho máximo', 10) );  	//retorna false
var_dump( $validador->tamanhoMaximo('asd', 10) ); 			 		//retorna true


//verifica se possui um número
var_dump( $validador->ValorNumerico(10) );  					//retorna true
var_dump( $validador->ValorNumerico('Treinaweb') ); 			//retorna false


//verifica se um número está dentro de um intervalo
var_dump( $validador->ValorRange(10, 1, 50) );  				//retorna true

//passa valores string, deve retornar falso
var_dump( $validador->ValorRange('Treinaweb', 1, 50) );   		//retorna false
var_dump( $validador->ValorRange(10, 'Treinaweb', 50) );   		//retorna false
var_dump( $validador->ValorRange(10, 1, 'Treinaweb') );   		//retorna false

//passa o valor mínimo maior que o máximo
var_dump( $validador->ValorRange(10, 50, 1) );  				//retorna false