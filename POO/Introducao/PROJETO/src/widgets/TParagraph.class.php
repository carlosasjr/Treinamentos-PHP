<?php

/**
 * TParagraph.class [ WIDGETS ]
 * Classe para exibição de parágrafos
 * @copyright (c) 2018, Carlos Junior
 */

namespace App\widgets;

class TParagraph extends TElement
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    /**
     * TParagraph constructor.
     * Instancia um objeto TParagraph
     * @param string $text = Texto a ser exibido
     */
    public function __construct($text)
    {
        parent::__construct('p');
        //atribui o conteúdo do texto
        parent::add($text);
    }

    /**
     *Método setAlign
     * Define o alinhamento do texto
     * @param $align = alinhamento do texto
     */
    public function setAlign($align)
    {
        $this->align = $align;
    }
}