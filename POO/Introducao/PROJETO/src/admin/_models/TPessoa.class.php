<?php

/**
 * TPessoa.class [ PESSOA ]
 * Classe responsável por gerenciar o cadastro de Pessoas
 * @copyright (c) 2018, Carlos Junior
 */
class TPessoa {

    private $nome;
    private $cidadeID;

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */



    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function __get($propriedade) {
        if ($propriedade == 'cidade'):
            return new TCidade($this->cidadeID);
        endif;
    }

    public function __construct($nome, $cidadeID) {
        $this->nome = $nome;
        $this->cidadeID = $cidadeID;
    }

}
