<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class loginController extends Controller
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
            $email = $data['email'];
            $senha = $data['senha'];

            unset($data['btnCadastro']);

            if ($usuario->login($email, $senha)) {
                header('Location: ' . BASE_URL);

            } else {
                $dados['msg'] = '<div class="alert alert-danger">
                              Usuário e/ou senha inválidos
                             </div>';

            }
        }


        $this->loadTemplate('login', $dados);
    }

    public function sair()
    {
        unset($_SESSION['cLogin']);


        $dados['msg'] = '<div class="alert alert-danger">
                              Logout realizado com sucesso. Volte Sempre!
                             </div>';

        $this->loadTemplate('login', $dados);
    }
}