<?php

/**
 * TIamge.class [ WIDGETS ]
 * Classe para exibição de imagens
 * @copyright (c) 2018, Carlos Junior
 */

namespace App\widgets;

class TImage extends TElement
{
    private $source; //localização da imagem

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */
    /**
     * TImage constructor.
     * Instancia objeto TImage
     * @param string $source = caminho da imagem
     */
    public function __construct($source)
    {
        parent::__construct('img');
        //atribui a localização da imagem
        $this->src = $source;
        $this->border = 0;
    }
}
