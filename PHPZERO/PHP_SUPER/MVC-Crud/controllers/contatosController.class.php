<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class contatosController extends Controller
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

    public function add()
    {
        $dados = array(
            'dado' => '',
            'error' => ''
        );

        $erro = filter_input(INPUT_GET, 'error', FILTER_SANITIZE_STRING);

        if ($erro) {
            $dados['error'] = $erro;
        }


        $this->loadTemplate('add', $dados);
    }

    public function save()
    {
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($dados)) {
            $id = $dados['id'];
            $nome = $dados['nome'];
            $email = $dados['email'];

            $contatos = new Contatos();

            if ($contatos->store($id, $nome, $email)) {
                header("Location: " . BASE_URL);
            } else {
                header("Location: " . BASE_URL . 'contatos/add?error=exist');
            }

        } else {
            header("Location: " . BASE_URL . 'contatos/add');
        }
    }

    public function edit($id)
    {
        $dados = array(
            'dado' => '',
            'error' => ''
        );

        $contato = new Contatos();
        $dado = $contato->getContatobyID($id);

        if (!empty($dado)) {
            $dados['dado'] = $dado;
        } else {
            header("Location: " . BASE_URL);
        }


        $this->loadTemplate('add', $dados);
    }

    public function del($id)
    {
        if (!empty($id)) {
            $contatos = new Contatos();
            if ($contatos->delete($id)) {
                header("Location: " . BASE_URL . '?del=true');
            } else {
                header("Location: " . BASE_URL);
            }
        }
    }
}