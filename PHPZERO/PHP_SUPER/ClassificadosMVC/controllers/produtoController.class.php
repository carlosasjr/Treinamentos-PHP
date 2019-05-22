<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class produtoController extends Controller
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function index()
    {

    }

    public function abrir($id)
    {
        $dados = array();

        $a = new Anuncios();

        if (empty($id)) {
            header("Location: " . BASE_URL);
            exit;
        }

        $info = $a->getAnuncio($id);

        $dados['info'] = $info;

        $this->loadTemplate('produto', $dados);

    }
}