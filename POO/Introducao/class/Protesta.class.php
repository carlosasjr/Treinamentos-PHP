<?php

/**
 * Protesta.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Carlos Junior
 */
class Protesta {

    static $Quantidade;

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */

    public function __construct($Nome) {
        self::$Quantidade++;
        $i = self::$Quantidade;
        
        echo "Novo Aplicação nr {$i}: $Nome <br>\n";
    }

    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */
}
