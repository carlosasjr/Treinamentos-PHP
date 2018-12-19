<?php

/**
 * TIamge.class [ WIDGETS ]
 * Classe para exibição de uma célula de uma tabela
 * @copyright (c) 2018, Carlos Junior
 */

namespace App\widgets;

class TTableCell extends TElement
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */
    /**
     * TTableCell constructor.
     * Instancia um nova célula
     * @param $value = conteúdo da célula
     */
    public function __construct($value)
    {
        parent::__construct('td');
        parent::add($value);
    }
}
