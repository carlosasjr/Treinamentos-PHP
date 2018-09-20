<?php

namespace Banco\Conta;

use Banco\Conta\Conta;
use Banco\Agencia;
use Banco\Cliente;

/**
* Classe Conta Corrente
*/
class ContaPoupanca extends Conta
{

	private $taxaRetorno = 0.5;
	
	public function __construct($numero, Agencia $agencia, Cliente $cliente, $saldoInicial=0, $taxaRetorno=0.5)
	{
		parent::__construct($numero, $agencia, $cliente, $saldoInicial);

		$this->taxaRetorno = $taxaRetorno;		
	}

	//Realiza saída de um valor da conta corrente
	public function saida($valor){	

		parent::saida($valor, 0);

	}		

	//Retorna o valor que terá se deixar o dinheiro por 1 mês
	public function CalculaRendimentos(){

		//só tem rendimento se o saldo for maior que 0
		if($this->saldo > 0) {
			$taxa = $this->taxaRetorno / 100;

			echo "O valor do rendimento é: R$" . number_format($this->saldo * $taxa, 2, ',', '.');
		}		
	}
}