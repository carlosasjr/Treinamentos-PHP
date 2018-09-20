<?php

/**
* classe de validação
*/
class Validar
{
	//Verifica se a string está vazia
	public function temConteudo($string=''){
		if ($string === '')
			return false;
		else
			return true;		
	}

	//Verifica o tamanho mínimo de uma string
	public function tamanhoMinimo($string='', $quantidade){
		if ( strlen($string) < $quantidade )
			return false;
		else
			return true;		
	}

	//Verifica o tamanho máximo de uma string
	public function tamanhoMaximo($string='', $quantidade){
		if ( strlen($string) > $quantidade )
			return false;
		else
			return true;		
	}

	//Verifica se a string está vazia
	public function ValorNumerico($valor){
		if (is_numeric($valor))
			return true;
		else
			return false;		
	}

	//verifica se um número está dentro de um range
	public function ValorRange($valor, $minimo, $maximo) {

		//primeiro verifica se todos os valores de entrada são numéricos
		if (!$this->ValorNumerico($valor) || !$this->ValorNumerico($minimo) || !$this->ValorNumerico($maximo))
			return false;

		//verifica se o valor mínimo é maior que valor máximo
		if ($minimo >= $maximo)
			return false;

		//Verifica se está dentro do range espedado
		if ( ($valor >= $minimo) && ($valor <= $maximo) )
			return true;
		else
			return false;

	}


}