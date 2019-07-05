<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class Albuns extends Model
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function getListaAlbuns()
    {
        $lista = array();
        $sql = "SELECT * FROM albuns ";
        $sql = $this->db->prepare($sql);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $lista = $sql->fetchAll();
        }

        return $lista;
    }

    public function getAbum($slug)
    {
        $lista = array();
        $sql = "SELECT * FROM albuns WHERE slug = :slug ";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':slug', $slug);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $lista = $sql->fetch();
        }

        return $lista;
    }

}