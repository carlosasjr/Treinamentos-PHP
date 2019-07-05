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

        $items = new Item();

        $limit = 10;

        $total = $items->getTotal();

        $dados['paginas'] = ceil($total / $limit);

        $dados['paginaAtual'] = 1;

        $pg = filter_input(INPUT_GET, 'p', FILTER_DEFAULT);
        if (!empty($pg)) {
            $dados['paginaAtual'] = intval($pg);
        }

        $offset = ($dados['paginaAtual'] * $limit) - $limit;

        $dados['lista'] = $items->getItem($offset, $limit);


        $this->loadTemplate('home', $dados);
    }

}