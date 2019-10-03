<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */

namespace Models;

use \Core\Model;
use \Models\Photos;

class Users extends Model
{
    private $id_users;
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */
    private function emailExists($email)
    {
        $sql = 'SELECT id FROM users WHERE email = :email';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            return true;
        }

        return false;
    }

    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function getId()
    {
        return $this->id_users;
    }

    public function getFeed($offset = 0, $per_page = 10)
    {
        //Passo 1 = Pegar os seguidores
        $followingUsers = $this->getFollowing($this->getId());


        //Passo 2 = Pegar uma lista das últimas fotos desses seguidores.
        $photo = new Photos();

        return $photo->getFeedCollection($followingUsers, $offset, $per_page);

    }

    public function getFollowing($id)
    {
        $array = array();
        $sql = "SELECT id_user_passive FROM users_following WHERE id_user_active = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetchAll();

            foreach ($data as $item) {
                $array[] = intval($item['id_user_passive']);
            }
        }

        return $array;
    }

    public function getInfo($id)
    {
        $array = array();

        $sql = 'SELECT id, name, email, avatar FROM users WHERE id = :id';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch(\PDO::FETCH_ASSOC);

            $photos = new Photos();

            if (!empty($array['avatar'])) {
                $array['avatar'] = BASE_URL . 'media/avatar/' . $array['avatar'];
            } else {
                $array['avatar'] = BASE_URL . 'media/avatar/default.jpg';
            }

            $array['following'] = $this->getFollowingCount($id);
            $array['followers'] = $this->getFollowersCount($id);
            $array['photos_count'] = $photos->getPhotosCount($id);

        }
        return $array;
    }

    public function getFollowingCount($id_users)
    {
        $sql = 'SELECT COUNT(*) AS c FROM users_following WHERE id_user_active = :id';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id_users);
        $sql->execute();

        $info = $sql->fetch();

        return $info['c'];
    }

    public function getFollowersCount($id_users)
    {
        $sql = 'SELECT COUNT(*) AS c FROM users_following WHERE id_user_passive = :id';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id_users);
        $sql->execute();

        $info = $sql->fetch();

        return $info['c'];
    }

    public function follow($id_user)
    {
        $sql = "SELECT * FROM users_following WHERE id_user_active = :id_user_active AND 
                id_user_passive = :id_user_passive";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_user_active', $this->getId());
        $sql->bindValue(':id_user_passive', $id_user);
        $sql->execute();

        if ($sql->rowCount() === 0) {
            $sql = "INSERT INTO users_following (id_user_active, id_user_passive) VALUES 
                    (:id_user_active, :id_user_passive)";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id_user_active', $this->getId());
            $sql->bindValue(':id_user_passive', $id_user);
            $sql->execute();
            return true;
        }

        return false;
    }

    public function unFollow($id_user)
    {
        $sql = "DELETE FROM users_following  WHERE id_user_active = :id_user_active AND 
                id_user_passive = :id_user_passive";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_user_active', $this->getId());
        $sql->bindValue(':id_user_passive', $id_user);
        $sql->execute();
    }

    public function checkCredentials($email, $pass)
    {
        $sql = "SELECT id, pass FROM users WHERE email = :email";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if ($sql->rowCount() == 0) {
            return false;
        }

        $info = $sql->fetch();

        //para cryptografar a senha
        //usar: $hash = password_hash('123456', PASSWORD_BCRYPT);


        if (!password_verify($pass, $info['pass'])) {
            return false;
        }

        $this->id_users = $info['id'];

        return true;
    }


    public function createJWT()
    {
        $jwt = new Jwt();

        return $jwt->create(['id_users' => $this->id_users]);
    }

    public function validateJWT($token)
    {
        $jwt = new Jwt();
        $info = $jwt->validate($token);

        if (isset($info->id_users)) {

            $this->id_users = $info->id_users;
            return true;
        }

        return false;
    }

    public function create($data)
    {
        if (!$this->emailExists($data['email'])) {
            $hash = password_hash($data['pass'], PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (name, email, pass) VALUES (:name, :email, :pass)";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':name', $data['name']);
            $sql->bindValue(':email', $data['email']);
            $sql->bindValue(':pass', $hash);
            $sql->execute();

            $this->id_users = $this->db->lastInsertId();

            return true;
        }

        return false;
    }

    public function editInfo($id, $data)
    {
        if ($id === $this->getId()) {
            $toChange = array();


            if (!empty($data['name'])) {
                $toChange['name'] = $data['name'];
            }

            if (!empty($data['email'])) {
                if (filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                    if (!$this->emailExists($data['email'])) {
                        $toChange['email'] = $data['email'];
                    } else {
                        return MSG_EMAIL_EXISTE;
                    }

                } else {
                    return MSG_EMAIL_INVALIDO;
                }
            }

            if (!empty($data['pass'])) {
                $toChange['pass'] = password_hash($data['pass'], PASSWORD_DEFAULT);
            }

            if (count($toChange) == 0) {
                return MSG_DADOS_NAO_PREENCHIDOS;
            }


            $fields = array();

            foreach ($toChange as $key => $valor) {
                $fields[] = $key . ' = :' . $key;
            }


            $sql = "UPDATE users SET " . implode(',', $fields) . " WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id);

            foreach ($toChange as $key => $valor) {
                $sql->bindValue(':' . $key, $valor);
            }

            $sql->execute();
            return '';


        } else {
            return MSG_PROIBIDO_EDITAR;
        }
    }

    public function delete($id)
    {
        if ($id === $this->getId()) {
            $photos = new Photos();
            $photos->deleteAll($id);

            $sql = 'DELETE FROM users_following WHERE id_user_active = :id OR id_user_passive = :id';
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();

            $sql = 'DELETE FROM users WHERE id = :id';
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id);
            $sql->execute();

            return '';
        } else {
            return MSG_PROIBIDO_DELETAR;
        }
    }


}