<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */

namespace SUPER;

class Pessoa
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    private static $instancia = null;
    private $nome;



    //protege o construtor
    //privado não pode ser instânciado
    private function __construct()
    {
    }


    //protege o clone
    //privado não é possivel clonar
    private function __clone()
    {

    }

    public static function getInstancia()
    {
        if (self::$instancia === null) {
            self::$instancia = new Pessoa();
        }

        return self::$instancia;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }


}