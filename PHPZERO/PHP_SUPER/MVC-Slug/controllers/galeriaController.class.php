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
        $dados = array();

        $albuns = new Albuns();
        $dados['albuns'] = $albuns->getListaAlbuns();

        $this->loadTemplate('galeria', $dados);
    }

    public function abrir($slug)
    {
        $dados = array();
        $albuns = new Albuns();

        $dados['album'] = $albuns->getAbum($slug);

        $this->loadTemplate('album', $dados);
    }
}
