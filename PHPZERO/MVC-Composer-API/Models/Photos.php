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
            $sql = "SELECT FROM photos WHERE id_user IN (" . implode(',', $ids) . ") ORDER BY id DESC LIMIT " . $offset . ", " . $per_page;
            $sql = $this->db->query($sql);

            if ($sql->rowCount() > 0) {
                $array = $sql->fetchAll(\PDO::FETCH_ASSOC);

                $users_info = $users->getInfo($item['id_user']);

                foreach ($array as $chave => $item) {
                    $array[$chave]['name'] = $users_info['name'];
                    $array[$chave]['avatar'] = $users_info['avatar'];
                    $array[$chave]['url'] = BASE_URL . 'media/photos/' . $item['url'];
                }
            }
        }

        return $array;
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
}
