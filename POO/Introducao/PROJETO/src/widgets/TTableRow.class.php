<?php

/**
 * TIamge.class [ WIDGETS ]
 * Classe para exibição de uma linha de uma tabela
 * @copyright (c) 2018, Carlos Junior
 */

namespace App\widgets;

class TTableRow extends TElement
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    /**
     * TTableRow constructor.
     * Instancia uma nova linha
     * @param $name
     */
    public function __construct()
    {
        parent::__construct('tr');
    }

    /**
     * Método addCell
     * Agrega um novo objeto célula TTableCell à linha
     * @param $value = conteúdo da célula
     * @return TTableCell
     */
    public function addCell($value)
    {
        //instancia objeto célula
        $cell = new TTableCell($value);
        parent::add($cell);
        //retorna o objeto instanciado
        return $cell;
    }
}
