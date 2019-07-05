<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class Aulas extends Model
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */
    public function getAulas($id_modulo)
    {
        $array = array();

        $sql = "SELECT * FROM aulas WHERE id_modulo = :id_modulo";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_modulo', $id_modulo);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }
}
