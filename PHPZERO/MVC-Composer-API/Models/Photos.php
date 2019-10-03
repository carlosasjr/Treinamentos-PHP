<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */

namespace Models;

use \Core\Model;

class Photos extends Model
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function getPhotosCount($id_users)
    {
        $sql = 'SELECT COUNT(*) AS c FROM photos WHERE id_user = :id';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id_users);
        $sql->execute();

        $info = $sql->fetch();

        return $info['c'];
    }

    public function getFeedCollection($ids, $offset, $per_page)
    {
        $array = array();
        $users = new Users();

        if (count($ids) > 0) {
            $sql = "SELECT FROM photos WHERE id_user IN (" . implode(',',
                    $ids) . ") ORDER BY id DESC LIMIT " . $offset . ", " . $per_page;
            $sql = $this->db->query($sql);

            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll(\PDO::FETCH_ASSOC);

                $users_info = $users->getInfo($item['id_user']);

                foreach ($array as $chave => $item) {
                    $array[$chave]['name'] = $users_info['name'];
                    $array[$chave]['avatar'] = $users_info['avatar'];
                    $array[$chave]['url'] = BASE_URL . 'media/photos/' . $item['url'];
                    $array[$chave]['like_count'] = $this->getLikeCount($item['id']);
                    $array[$chave]['comments'] = $this->getComments($item['id']);
                }
            }
        }

        return $array;
    }

    public function getPhoto($id_photo)
    {
        $array = array();

        $users = new Users();

        $sql = "SELECT * FROM photos WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id_photo);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch(\PDO::FETCH_ASSOC);

            $users_info = $users->getInfo($array['id_user']);
            $array['name'] = $users_info['name'];
            $array['avatar'] = $users_info['avatar'];
            $array['url'] = BASE_URL . 'media/photos/' . $array['url'];
            $array['like_count'] = $this->getLikeCount($array['id']);
            $array['comments'] = $this->getComments($array['id']);
        }


        return $array;
    }


    public function getComments($id_photo)
    {
        $array = array();

        $sql = "SELECT c.*, u.name FROM photos_comments c
 
                LEFT JOIN users u ON
                u.id = c.id_user 
                
                WHERE c.id_photo = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id_photo);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }

        return $array;
    }

    public function getLikeCount($id_photo)
    {
        $sql = "SELECT count(*) as c FROM photos_likes WHERE id_photo = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id_photo);
        $sql->execute();

        $info = $sql->fetch();

        return $info['c'];
    }


    public function getPhotosFromUser($id_user, $offset, $per_page)
    {
        $array = array();

        $sql = "SELECT * FROM photos WHERE id_user = :id ORDER BY id DESC LIMIT " . $offset . "," . $per_page;

        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id_user);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll(\PDO::FETCH_ASSOC);

            foreach ($array as $chave => $item) {
                $array[$chave]['url'] = BASE_URL . 'media/photos/' . $item['url'];
                $array[$chave]['like_count'] = $this->getLikeCount($item['id']);
                $array[$chave]['comments'] = $this->getComments($item['id']);
            }
        }


        return $array;
    }


    public function getRandomPhotos($per_page, $excludes = array())
    {
        $array = array();


        foreach ($excludes as $chave => $item) {
            $excludes[$chave] = intval($item);
        }

        if (count($excludes) > 0) {
            $sql = "SELECT * FROM photos WHERE id NOT IN (" . implode(',',
                    $excludes) . ") ORDER BY RAND() LIMIT " . $per_page;
        } else {
            $sql = "SELECT * FROM photos ORDER BY RAND() LIMIT " . $per_page;
        }

        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll(\PDO::FETCH_ASSOC);

            foreach ($array as $chave => $item) {
                $array[$chave]['url'] = BASE_URL . 'media/photos/' . $item['url'];
                $array[$chave]['like_count'] = $this->getLikeCount($item['id']);
                $array[$chave]['comments'] = $this->getComments($item['id']);
            }
        }


        return $array;
    }


    public function deletePhoto($id_photo, $id_user)
    {
        $sql = "SELECT id FROM photos WHERE id = :id AND id_user = :id_user";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id_photo);
        $sql->bindValue(':id_user', $id_user);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $sql = 'DELETE FROM photos WHERE id = :id';
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id_photo);
            $sql->execute();

            $sql = 'DELETE FROM photos_comments WHERE id_photo = :id';
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id_photo);
            $sql->execute();

            $sql = 'DELETE FROM photos_likes WHERE id_photo = :id';
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id_photo);
            $sql->execute();
            return '';
        }

        return MSG_PHOTO_NAO_EXISTE;
    }

    public function deleteAll($id_users)
    {
        $sql = 'DELETE FROM photos WHERE id_user = :id';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id_users);
        $sql->execute();

        $sql = 'DELETE FROM photos_comments WHERE id_users = :id';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id_users);
        $sql->execute();

        $sql = 'DELETE FROM photos_likes WHERE id_users = :id';
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id_users);
        $sql->execute();
    }

    public function addComment($id_photo, $id_user, $txt)
    {
        if (empty($txt)) {
            return MSG_COMENTARIO_VAZIO;
        }

        $sql = "INSERT INTO photos_comments(id_user, id_photo, txt) VALUES 
                 (:id_user, :id_photo, :txt)";

        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_user', $id_user);
        $sql->bindValue(':id_photo', $id_photo);
        $sql->bindValue(':txt', $txt);
        $sql->execute();

        return '';
    }

    public function deleteComment($id_comment, $id_user)
    {
        $sql = "SELECT id FROM photos_comments WHERE id_user = :id_user AND id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_user', $id_user);
        $sql->bindValue(':id', $id_comment);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $sql = 'DELETE FROM photos_comments WHERE id = :id';
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id', $id_comment);
            $sql->execute();

            return '';
        }

        return MSG_COMENTARIO_NAO_PODE_DELETAR;
    }

    public function like($id_photo, $id_user)
    {
        $sql = "SELECT id FROM photos_likes WHERE id_user = :id_user AND id_photo = :id_photo";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_user', $id_user);
        $sql->bindValue(':id_photo', $id_photo);
        $sql->execute();

        if ($sql->rowCount() === 0) {
            $sql = "INSERT INTO photos_like (id_user, id_photo) VALUES (:id_user, :id_photo)";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id_user', $id_user);
            $sql->bindValue(':id_photo', $id_photo);
            $sql->execute();
        }

        return '';
    }

    public function unlike($id_photo, $id_user)
    {
        $sql = "DELETE FROM photos_like WHERE id_user = :id_user AND id_photo = :id_photo)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_user', $id_user);
        $sql->bindValue(':id_photo', $id_photo);
        $sql->execute();

        return '';
    }
}
