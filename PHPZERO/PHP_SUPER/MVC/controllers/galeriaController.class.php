<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class galeriaController extends Controller
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function index()
    {
        $dados = array(
            'qt' => 129
        );

        $this->loadTemplate('galeria/galeria', $dados);
    }

    public function buscar($id) {
        $dados = array(
            'descricao' => 'livros'
        );

        $this->loadTemplate('galeria/galeria_item', $dados);
    }

}