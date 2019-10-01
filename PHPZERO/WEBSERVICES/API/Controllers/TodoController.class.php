<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */

use Core\Controller;

class TodoController extends Controller
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    }

    public function listar()
    {

    }

    public function add()
    {
       // if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
           // $titulo = addslashes($_POST['titulo']);
        echo 'chegou aqui';
            $t = new Tarefas();
            $t->addTarefa('teste');
       // }
    }

    public function del()
    {

    }

    public function update()
    {

    }


}