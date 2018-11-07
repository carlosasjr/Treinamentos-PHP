<?php

/**
 * ContaCorrente.class [ Conta ]
 * Descricao
 * @copyright (c) year, Carlos Junior
 */
class ContaCorrente extends Conta {

    public $Limite;
    public $TaxaTransferencia = 2.5;

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */

    public function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Limite) {
        parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);

        $this->Limite = $Limite;
    }

    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    /** <b>Metodo Retirar</b>
     * Metódo para Retirar um valor do Saldo Atual se existir saldo suficiente.
     * Debita Imposto de 0.05 do valor da retirada.
     * @param float $quantia = Valor a Retirar
     * @return float Altera o Saldo Atual
     *  */
    public function Retirar($quantia) {
        //imposto sobre movimentação financeira

        $cpmf = 0.05;

        if (($this->Saldo + $this->Limite) >= $quantia):
            parent::Retirar($quantia);

            //Debita o imposto
            parent::Retirar($quantia * $cpmf);
        else:
            echo "Retirada não permitida...\n";
            return False;
        endif;

        return True;
    }

    /** <b>Metodo Transferir</b>
     * Metódo para Transferir um valor do Saldo Atual para outra Conta.
     * Transferências entre contas distintas é cobrado taxa de transferencia.
     * @param Conta $Conta = Conta para transferência
     * @param float $Valor = Valor a Transferir
     * @return float Altera o Saldo Atual
     *  */
    final public function Transferir($Conta, $Valor) {
        if ($this->Retirar($Valor)):
            $Conta->Depositar($Valor);
        endif;

        if ($this->Titular != $Conta->Titular):
            $this->Retirar($this->TaxaTransferencia);
        endif;
    }

}
