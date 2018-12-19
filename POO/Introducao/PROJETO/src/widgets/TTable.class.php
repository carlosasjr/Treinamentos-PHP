<?php

/**
 * TIamge.class [ WIDGETS ]
 * Classe para exibição de tabelas
 * @copyright (c) 2018, Carlos Junior
 */

namespace App\widgets;

class TTable extends TElement
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */
    /**
     * TTable constructor.
     * Instancia uma nova tabela
     */
    public function __construct()
    {
        parent::__construct('table');
    }

    /**
     * Método addRow
     * Agrega um novo objeto linha TRableRow na tabela
     * @return TTableRow
     */
    public function addRow()
    {
        //instancia objeto linha
        $row = new TTableRow;
        //armazena no array de linhas
        parent::add($row);
        return $row;
    }
}