<?php

/**
 * Funcionario.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Carlos Junior
 */
class Funcionario {

    private $Codigo;
    public $Nome;
    private $Nascimento;
    protected $Salario;

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function getSalario() {
        return $this->Salario;
    }

    public function setSalario($Salario) {
        if (is_numeric($Salario) && $Salario > 0):
            $this->Salario = $Salario;
        else:
            echo 'Valor inválido';
            
        endif;
    }

}
