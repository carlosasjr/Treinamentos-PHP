<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class cadastrarController extends Controller
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

        $usuario = new Usuarios();

        $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($data) && $data['btnCadastro']) {
            $nome = $data['nome'];
            $email = $data['email'];
            $senha = $data['senha'];
            $telefone = $data['telefone'];

            unset($data['btnCadastro']);

            if (in_array('', $data)) {
                $dados['msg'] = '<div class="alert alert-warning">Preencha todos os campos</div>';
            } else {
                if ($usuario->cadastrar($nome, $email, $senha, $telefone)) {
                    $dados['msg'] = '<div class="alert alert-success"><strong>Parabéns!</strong> Cadastrado com sucesso.<a href="' . BASE_URL . 'login">Faça o login agora.</a></div>';
                } else {
                    $dados['msg'] = '<div class="alert alert-warning">Usuário já existe.<a href="' . BASE_URL . 'login">Faça o login agora.</a></div>';
                }
            }
        }

        $this->loadTemplate('cadastrar', $dados);
    }
}
