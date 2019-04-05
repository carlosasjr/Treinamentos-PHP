<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */

namespace phpAvancado;

class Carros
{
    /** @var \PDO * */
    private $pdo;
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getCarros()
    {
        $array = array();

        $sql = 'SELECT * FROM carros';
        $sql = $this->pdo->prepare($sql);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }
}
