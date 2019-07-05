<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class Item extends Model
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */
    public function getItem($offset, $limit)
    {
        $array = array();

        $sql = "SELECT * FROM items LIMIT $offset, $limit";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getTotal()
    {
        $sql = "SELECT count(*) t FROM items ";
        $sql = $this->db->query($sql);
        $sql = $sql->fetch();

        return $sql['t'];
    }

}