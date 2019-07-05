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

        $modulos = new Modulos();
        $dados['modulos'] = $modulos->getList();


        $this->loadTemplate('home', $dados);
    }

    public function pegar_aulas()
    {
        $modulo = filter_input(INPUT_POST, 'modulo', FILTER_DEFAULT);

        if (isset($modulo)) {
            $id_modulo = $modulo;

            $aulas = new Aulas();
            $array = $aulas->getAulas($id_modulo);

            echo json_encode($array);
            exit;
        }
    }

}