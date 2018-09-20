<?php

namespace Banco;

/**
* Classe Agencia
*/
class Agencia
{
	
	private $codigo;
	private $endereco;

	function __construct($codigo, $endereco)
	{
		$this->codigo 	= $codigo;
		$this->endereco = $endereco; 
	}
}