<?php

/**
 * Estagiario.class [ Funcionario ]
 * Descricao
 * @copyright (c) year, Carlos Junior
 */
class Estagiario extends Funcionario {
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function getSalario() {
       return $this->Salario * 1.12;
    }

}
