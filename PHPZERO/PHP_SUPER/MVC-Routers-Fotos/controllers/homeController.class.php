<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class homeController extends Controller
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function index()
    {
        $dados = array();

        $fotos = new fotos();

        $dados['fotos'] = $fotos->getFotos();

        $this->loadTemplate('home', $dados);
    }

    public function store()
    {
        $fotos = new fotos();
        $fotos->saveFotos();
    }

}