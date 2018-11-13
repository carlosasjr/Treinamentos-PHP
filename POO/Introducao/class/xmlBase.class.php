<?php

/**
 * xmlBase.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Carlos Junior
 */
class xmlBase {
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function toXML() {
        $retorno = '<' . get_class($this) . '>' . "\n";

        $propriedade = get_object_vars($this);

        foreach ($propriedade as $key => $value) {
            $retorno .= "<$key>$value</$key>";
        }

        $retorno .= '</' . get_class($this) . '>' . "\n";
        
        return $retorno;
    }

}
