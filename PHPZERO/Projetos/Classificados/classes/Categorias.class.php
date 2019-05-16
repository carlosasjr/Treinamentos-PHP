<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class Categorias
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function getLista()
    {
        $array = array();
        global $pdo;

        $sql = $pdo->query("SELECT * FROM categorias");

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;

    }
}