<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */

namespace Controllers;

use Core\Controller;
use Models\Fotos;

class HomeController extends Controller
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

        $fotos = new Fotos();

        $dados['fotos'] = $fotos->getFotos();

        $this->loadTemplate('home', $dados);
    }

    public function store()
    {
        $fotos = new Fotos();
        $fotos->saveFotos();
    }

}