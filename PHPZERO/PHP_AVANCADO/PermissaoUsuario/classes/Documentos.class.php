<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class Documentos
{
    /** @var PDO */
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

    public function getDocumentos()
    {
        $array = array();

        $sql = "SELECT * FROM documentos";
        $sql = $this->pdo->prepare($sql);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;
    }
}