<?php

/**
 * Aluno [ TIPO ]
 * Descricao
 * @copyright (c) year, Carlos Junior
 */

class Aluno implements IAluno {
    private $Nome;
    private $Responsavel;
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */
    public function getNome() {
       return $this->Nome; 
    }

    public function setNome($Nome) {
        $this->Nome = $Nome;
    }

    public function setResponsavel(Pessoa $Responsavel) {
        
    }

}
