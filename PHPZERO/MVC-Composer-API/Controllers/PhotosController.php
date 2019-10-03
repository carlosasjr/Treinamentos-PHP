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


class PhotosController extends Controller
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

    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function index(){}

    public function random()
    {
        $this->methodRequest();

        $users = new Users();
        $photos = new Photos();

        if (empty($this->data['jwt']) || !$users->validateJWT($this->data['jwt'])) {
            $this->array['error'] = MSG_ACESSO_NEGADO;
            return $this->returnJson($this->array);
        }

        $this->array['logged'] = true;


        if ($this->method != 'GET') {
            $this->array['error'] = MSG_METODO_INCOMPATIVEL;
            return $this->returnJson($this->array);
        }


        $per_page = 10;

        if (!empty($this->data['per_page'])) {
            $per_page = intval($this->data['per_page']);
        }

        $excludes = array();
        if (!empty($this->data['excludes'])) {
            $excludes = explode(',', $this->data['excludes']);
        }

        $this->array['data'] = $photos->getRandomPhotos($per_page, $excludes);

        $this->returnJson($this->array);
    }

    public function view($id_photo)
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
            case 'GET':
                $this->array['data'] = $photos->getPhoto($id_photo);

                break;

            case 'DELETE':
                $this->array['error'] = $photos->deletePhoto($id_photo, $users->getId());
                break;

            default:
                $this->array['error'] = MSG_METODO_NAO_DISPONIVEL;
                break;
        }

        $this->returnJson($this->array);
    }

    public function comment($id_photo)
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
                if (empty($this->data['txt'])) {
                    $this->array['error'] = MSG_COMENTARIO_VAZIO;
                    return $this->returnJson($this->array);
                }

                $this->array['error'] = $photos->addComment($id_photo, $users->getId(), $this->data['txt']);
                break;

            default:
                $this->array['error'] = MSG_METODO_NAO_DISPONIVEL;
                break;
        }

        $this->returnJson($this->array);
    }

    public function delete_comment($id)
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
            case 'DELETE':
                $this->array['error'] = $photos->deleteComment($id, $users->getId());
                break;

            default:
                $this->array['error'] = MSG_METODO_NAO_DISPONIVEL;
                break;
        }

        $this->returnJson($this->array);
    }

    public function like($id_photo)
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
                $this->array['error'] = $photos->like($id_photo, $users->getId());

                break;

            case 'DELETE':
                $this->array['error'] = $photos->unlike($id_photo, $users->getId());
                break;

            default:
                $this->array['error'] = MSG_METODO_NAO_DISPONIVEL;
                break;
        }

        $this->returnJson($this->array);
    }


}
