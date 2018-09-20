<?php

namespace Banco\Conta;

use Banco\Agencia;
use Banco\Cliente;

/**
* Classe abstrata Conta
*/
abstract class Conta
{
	private   $numero;
	private   $agencia;
	private   $cliente;
	protected $operacoes;	
	protected $saldo;


	function __construct($numero, Agencia $agencia, Cliente $cliente, $saldoInicial)
	{
		$this->numero 		= $numero;
		$this->agencia 		= $agencia;
		$this->cliente 		= $cliente;
		$this->saldo 		= $saldoInicial;
	}

	//Realiza entrada de um valor na conta
	public function entrada($valor){
		if (is_numeric($valor) && $valor > 0){

			$saldoInicial = $this->saldo;
			$this->saldo += $valor;

			$this->operacoes[] = [
				'tipo' => 'entrada', 
				'data' => Date('d-m-Y'),
				'saldo-inicial' => $saldoInicial,
				'valor' => $valor, 
				'saldo-final' => $this->saldo];

			return true;
		}
		else
			return false;
	}

	//Realiza saída de um valor da conta
	public function saida($valor, $limite=0){
		
		if (is_numeric($valor) && $valor > 0){

			//Calcula qual será o saldo final			
			$saldoFinal = ($valor * -1) + $this->saldo;

			//garante que não passará do limite
			if ( $saldoFinal >= ($limite * -1)  ) {

				$saldoInicial = $this->saldo;
				$this->saldo = $saldoFinal;

				$this->operacoes[] = [
					'tipo' => 'saida', 
					'data' => Date('d-m-Y'),
					'saldo-inicial' => $saldoInicial,
					'valor' => $valor, 
					'saldo-final' => $saldoFinal];

				return true;
			}
		}
		return false;
	}

	//Escreve na tela o saldo atual da conta
	public function saldo(){
		printf("O saldo da conta %s é R$%s <br>", $this->numero, number_format($this->saldo, 2, ',', '.'));
	}

	//Escreve na tela uma tabela com as operações da conta
	public function extrato(){
		if( $this->operacoes > 0 ) {
			$table = <<<HTML
			<table border='1'>
			  <thead>
			  <tr>
			  	 <th>Data</th>
			     <th>Tipo</th>
			     <th>Saldo inicial</th>
			     <th>Valor</th>
			     <th>Saldo final</th>
			  </tr>
			  </thead>
			  <tbody>
HTML;

			foreach($this->operacoes as $operacao) {
				$table .= '<tr>';
				$table .= '<td>' . $operacao['data'] . '</td>';
				$table .= '<td>' . $operacao['tipo'] . '</td>';				
				$table .= '<td>R$' . number_format($operacao['saldo-inicial'], 2, ',', '.') . '</td>';
				$table .= '<td>R$' . number_format($operacao['valor'], 2, ',', '.') . '</td>';
				$table .= '<td>R$' . number_format($operacao['saldo-final'], 2, ',', '.') . '</td>';
				$table .= '</tr>';
			}

			$table .= '</tbody></table>';	

			echo $table;		  

		}
		else 
			echo "Não existem operações";

	}		



}