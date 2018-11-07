<?php

/**
 * Aplicacao.class [ Biblioteca ]
 * Descricao
 * @copyright (c) year, Carlos Junior
 */
class Aplicacao extends Biblioteca {

    const Ambiente = "Gnome Desktop";
    const Versao = '3.8';

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */

    public function __construct($Nome) {
        echo parent::Nome . self::Ambiente . self::Versao . $Nome. "<br>\n";
    }

    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */
}
