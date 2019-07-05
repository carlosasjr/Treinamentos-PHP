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


        $dados = array('del' => '');

        $del = filter_input(INPUT_GET, 'del', FILTER_SANITIZE_STRING);

        if ($del) {
            $dados['del'] = $del;
        }

        $contatos = new Contatos();
        $dados['lista'] = $contatos->getAll();



        $this->loadTemplate('home', $dados);
    }

}