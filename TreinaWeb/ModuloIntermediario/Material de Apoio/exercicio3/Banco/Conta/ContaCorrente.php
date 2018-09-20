<?php

namespace Banco\Conta;

use Banco\Conta\Conta;
use Banco\Agencia;
use Banco\Cliente;

/**
* Classe Conta Corrente
*/
class ContaCorrente extends Conta
{

	private $limite = 100;
	private $taxaJuros = 9;
	
	public function __construct($numero, Agencia $agencia, Cliente $cliente, $saldoInicial=0, $limite=100, $taxaJuros=9)
	{
		parent::__construct($numero, $agencia, $cliente, $saldoInicial);

		$this->limite = $limite;
		$this->taxaJuros = $taxaJuros;		
	}

	//Realiza saída de um valor da conta corrente
	public function saida($valor){	

		parent::saida($valor, $this->limite);

	}	


	//Retorna o valor que terá que pagar se deixar o saldo negativo por 1 mês
	public function CalculaJuros(){
		
		//só tem juros se o saldo for menor que 0
		if($this->saldo < 0) {
			$taxa = $this->taxaJuros / 100;

			echo "O valor do juros é: R$" . number_format($this->saldo * $taxa, 2, ',', '.');
		}
	}

}