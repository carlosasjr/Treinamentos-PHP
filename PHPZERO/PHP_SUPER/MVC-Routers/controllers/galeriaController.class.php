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
    public  function index()
    {
        $dados = array();
        $dados['id'] = '9999';
        $dados['titulo'] = 'Padrão';

        $this->loadTemplate('galeria', $dados);
    }

    public function abrir($id, $titulo)
    {
        $dados = array();
        $dados['id'] = $id;
        $dados['titulo'] = $titulo;

        $this->loadTemplate('galeria', $dados);

    }
}
