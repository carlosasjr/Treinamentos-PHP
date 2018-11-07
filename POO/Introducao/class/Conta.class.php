<?php

/**
 * Conta.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Carlos Junior
 */
abstract class Conta {

    public $Agencia;
    public $Codigo;
    public $DataDeCriacao;
  
    /* @var Pessoa */
    public $Titular;
    public $Senha;
    public $Cancelada;
    
    protected $Saldo;

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */
    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo) {
        $this->Agencia = $Agencia;
        $this->Codigo = $Codigo;
        $this->DataDeCriacao = $DataDeCriacao;
        $this->Titular = $Titular;
        $this->Senha = $Senha;
        $this->Saldo = $Saldo;
    }
    
    public function __destruct() {
        echo "Objeto Conta {$this->Codigo} de {$this->Titular->Nome} finalizada..<br>\n";
    }

    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

     /** <b>Metodo setSaldo</b>
     * Metódo para informar o valor do Saldo Atual
     * @param float $Saldo = Valor Inicial
     * @return float Altera o Saldo Atual
     *  */
    function setSaldo($Saldo) {
        $this->Saldo = $Saldo;
    }

    /** <b>Metodo Retirar</b>
     * Metódo para Retirar um valor do Saldo Atual
     * @param float $quantia = Valor a Retirar
     * @return float Altera o Saldo Atual
     *  */
    public function Retirar($quantia) {
        if ($quantia > 0):
            $this->Saldo -= $quantia;
        endif;
    }

    /** <b>Metodo Depositar</b>
     * Metódo para Depositar um valor ao Saldo Atual
     * @param float $quantia = Valor a Depositar
     * @return float Altera o Saldo Atual
     *  */
    public function Depositar($quantia) {
        if ($quantia > 0):
            $this->Saldo += $quantia;
        endif;
    }

    /** <b>Metodo ObterSaldo</b>
     * Metódo para Retornar o Saldo Atual
     * @return string Retorna o Saldo Atual
     *  */
    public function ObterSaldo() {
        return $this->Saldo;
    }
    
    abstract public function Transferir($Conta, $Valor);       
    

}
