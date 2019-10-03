<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */

namespace Controllers;

use Core\Controller;
use Models\Photos;
use Models\Users;

class UsersController extends Controller
{
    private $method;
    private $data;
    private $array;

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */
    private function methodRequest()
    {
        $this->method = $this->getMethod();
        $this->data = $this->getRequestData();

        $this->array['error'] = '';
        $this->array['logged'] = false;
    }

    private function informedEmailPass()
    {
        if (empty($this->data['email']) || empty($this->data['pass'])) {
            return $this->array['error'] = MSG_EMAIL_SENHA;
        }

        $this->validateUser();
    }

    private function validateUser()
    {
        $users = new Users();

        if (!$users->checkCredentials($this->data['email'], $this->data['pass'])) {
            return $this->array['error'] = MSG_ACESSO_NEGADO;
        }

        $this->array['jwt'] = $users->createJWT();
    }


    private function createUser()
    {
        $users = new Users();

        if (!$users->create($this->data)) {
            return $this->array['error'] = MSG_EMAIL_EXISTE;
        }

        $this->array['jwt'] = $users->createJWT();
    }

    private function validateEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->array['error'] = MSG_EMAIL_INVALIDO;
        }

        $this->createUser();
    }


    private function validateData()
    {
        if (empty($this->data['name']) && empty($this->data['email']) && empty($this->data['pass'])) {
            return $this->array['error'] = MSG_DADOS_NAO_PREENCHIDOS;
        }

        $this->validateEmail($this->data['email']);
    }


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function login()
    {
        $this->methodRequest();

        if ($this->method != 'POST') {
            $this->array['error'] = MSG_METODO_INCOMPATIVEL;
            return $this->returnJson($this->array);
        }

        $this->informedEmailPass();
        $this->returnJson($this->array);
    }


    public function newRecord()
    {
        $this->methodRequest();

        if ($this->method != 'POST') {
            $this->array['error'] = MSG_METODO_INCOMPATIVEL;
            return $this->returnJson($this->array);
        }

        $this->validateData();
        $this->returnJson($this->array);
    }


    public function view($id)
    {
        $this->methodRequest();

        $users = new Users();

        if (empty($this->data['jwt']) || !$users->validateJWT($this->data['jwt'])) {
            $this->array['error'] = MSG_ACESSO_NEGADO;
            return $this->returnJson($this->array);
        }

        $this->array['logged'] = true;
        $this->array['is_me'] = false;

        if ($id == $users->getId()) {
            $this->array['is_me'] = true;
        }

        switch ($this->method) {
            case 'GET':
                $this->array['data'] = $users->getInfo($id);

                if (count($this->array['data']) === 0) {
                    $this->array['error'] = MSG_USUARIO_NAO_EXISTE;
                }

                break;

            case 'PUT':
                $this->array['error'] = $users->editInfo($id, $this->data);
                break;

            case 'DELETE':
                $this->array['error'] = $users->delete($id);
                break;

            default:
                $this->array['error'] = MSG_METODO_NAO_DISPONIVEL;
                break;
        }

        $this->returnJson($this->array);
    }

    public function feed()
    {
        $this->methodRequest();

        $users = new Users();

        if (empty($this->data['jwt']) || !$users->validateJWT($this->data['jwt'])) {
            $this->array['error'] = MSG_ACESSO_NEGADO;
            return $this->returnJson($this->array);
        }

        $this->array['logged'] = true;

        if ($this->method != 'GET') {
            $this->array['error'] = MSG_METODO_INCOMPATIVEL;
            return $this->returnJson($this->array);
        }

        $offset = 0;

        if (!empty($this->data['offset'])) {
            $offset = intval($this->data['offset']);
        }

        $per_page = 10;

        if (!empty($this->data['per_page'])) {
            $per_page = intval($this->data['per_page']);
        }

        $this->array['data'] = $users->getFeed($offset, $per_page);

        $this->returnJson($this->array);
    }

    public function photos($id_user)
    {
        $this->methodRequest();

        $users = new Users();
        $photos = new Photos();

        if (empty($this->data['jwt']) || !$users->validateJWT($this->data['jwt'])) {
            $this->array['error'] = MSG_ACESSO_NEGADO;
            return $this->returnJson($this->array);
        }

        $this->array['logged'] = true;

        $this->array['is_me'] = false;
        if ($id_user == $users->getId()) {
            $this->array['is_me'] = true;
        }

        if ($this->method != 'GET') {
            $this->array['error'] = MSG_METODO_INCOMPATIVEL;
            return $this->returnJson($this->array);
        }

        $offset = 0;

        if (!empty($this->data['offset'])) {
            $offset = intval($this->data['offset']);
        }

        $per_page = 10;

        if (!empty($this->data['per_page'])) {
            $per_page = intval($this->data['per_page']);
        }

        $this->array['data'] = $photos->getPhotosFromUser($id_user, $offset, $per_page);

        $this->returnJson($this->array);
    }

    public function follow($id_user)
    {
        $this->methodRequest();

        $users = new Users();
        $photos = new Photos();

        if (empty($this->data['jwt']) || !$users->validateJWT($this->data['jwt'])) {
            $this->array['error'] = MSG_ACESSO_NEGADO;
            return $this->returnJson($this->array);
        }

        $this->array['logged'] = true;

        switch ($this->method) {
            case 'POST':
                $users->follow($id_user);
                break;

            case 'DELETE':
                $users->unFollow($id_user);
                break;

            default:
                $this->array['error'] = MSG_METODO_NAO_DISPONIVEL;
                break;
        }


        $this->returnJson($this->array);
    }
}
