<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class anunciosController extends Controller
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function index()
    {
        $this->logado();

        $dados = array();

        $a = new Anuncios();
        $anuncios = $a->getMeusAnuncios();

        $dados['anuncios'] = $anuncios;

        $this->loadTemplate('anuncios', $dados);
    }

    public function adicionar()
    {
        $dados = array();

        $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($data) && $data['btnForm']) {
            $titulo = $data['titulo'];
            $categoria = $data['categoria'];
            $valor = $data['valor'];
            $descricao = $data['descricao'];
            $estado = $data['estado'];

            $a = new Anuncios();

            $a->addAnuncio($titulo, $categoria, $valor, $descricao, $estado);


            $dados['msg'] = '<div class="alert alert-success">Produto Adicionado com sucesso!</div>';
        }

        $c = new Categorias();
        $cats = $c->getLista();

        $dados['cats'] = $cats;

        $this->loadTemplate('adicionar', $dados);

    }

    public function excluir($id)
    {
        if (!empty($id)) {
            $anuncio = new Anuncios();
            $anuncio->excluirAnuncio($id);
        }

        header("Location: " . BASE_URL . 'anuncios');
    }

    public function excluirfoto($id)
    {
        if (!empty($id)) {
            $anuncio = new Anuncios();
            $id_anuncio = $anuncio->excluirFoto($id);
        }


        if (isset($id_anuncio)) {
            header("Location: " . BASE_URL . 'anuncios/editar/' . $id_anuncio);
        } else {
            header("Location: " . BASE_URL . 'anuncios');
        }
    }

    public function editar($id)
    {
        $this->logado();

        $dados = array();
        $a = new Anuncios();

        $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($data) && $data['btnForm']) {
            $titulo = $data['titulo'];
            $categoria = $data['categoria'];
            $valor = $data['valor'];
            $descricao = $data['descricao'];
            $estado = $data['estado'];

            $fotos = array();

            if (isset($_FILES['fotos'])) {
                $fotos = $_FILES['fotos'];
            }


            $a->editAnuncio($titulo, $categoria, $valor, $descricao, $estado, $fotos, $id);

            $dados['msg'] = '<div class="alert alert-success">
                                 Produto Editado com sucesso!
                                </div>';


        }

        if (!empty($id)) {
            $c = new Categorias();

            $cats = $c->getLista();
            $dados['cats'] = $cats;


            $info = $a->getAnuncio($id);
            $dados['info'] = $info;
        } else {
            header("location: " . BASE_URL . 'anuncios');
        }


        $this->loadTemplate('editar-anuncio', $dados);
    }
}