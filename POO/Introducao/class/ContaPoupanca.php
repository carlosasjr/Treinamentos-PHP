<?php

/**
 * ContaPoupanca [ Conta ]
 * Descricao
 * @copyright (c) year, Carlos Junior
 */
final class ContaPoupanca extends Conta {

    public $Aniversario;

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */

    public function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Aniversario) {
        parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);

        $this->Aniversario = $Aniversario;
    }

    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */


    /** <b>Metodo Retirar</b>
     * Metódo para Retirar um valor do Saldo Atual se existir saldo suficiente.
     * @param float $quantia = Valor a Retirar
     * @return float Altera o Saldo Atual
     *  */
    public function Retirar($quantia) {
        if ($this->Saldo >= $quantia):
            parent::Retirar($quantia);
        else:
            echo "Retirada não permitida...\n";
            return false;
        endif;
        
        return true;
    }
    
    
    public function Transferir($Conta, $Valor) {
        if ($this->Retirar($valor)):
            $Conta->Depositar($Valor);
        endif;
    }    
    

}
