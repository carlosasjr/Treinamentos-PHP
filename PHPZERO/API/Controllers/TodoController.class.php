<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */

namespace Controllers;

use Core\Controller;
use Models\Tarefas;

class TodoController extends Controller
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function index()
    {
        echo 'index';
    }

    public function listar()
    {
        $array = array();

        header("Content-Type: application/json");

        $t = new Tarefas();
        $array = $t->listar();

        echo json_encode($array);
    }

    public function add()
    {
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


        if (!empty($dados)) {
            $titulo = $dados['titulo'];
            $t = new Tarefas();
            $t->addTarefa($titulo);
        }
    }

    public function del()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        if (!empty($id)) {
            $t = new Tarefas();
            $t->delTarefa($id);
        }
    }

    public function update()
    {
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($dados)) {
            $id = $dados['id'];
            $status = $dados['status'];

            $t = new Tarefas();
            $t->updateStatus($status, $id);
        }
    }
}
