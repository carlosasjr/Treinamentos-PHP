<?php

namespace Banco;

/**
* Classe clientes
*/
class Cliente
{

	private $nome;
	private $email;
	private $endereco;
	
	function __construct($nome, $email, $endereco)
	{
		$this->nome = $nome;
		$this->email = $email;
		$this->endereco = $endereco;
	}

}