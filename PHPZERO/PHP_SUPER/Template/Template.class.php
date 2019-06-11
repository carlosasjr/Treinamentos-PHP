<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class Template
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    private $html;

    public function __construct($template)
    {
        if (file_exists($template)) {
            $this->html = file_get_contents($template);
        }
    }

    public function render($array)
    {
        foreach ($array as $chave => $value) {
            $this->html = str_replace("{". $chave . "}", $value, $this->html);
        }

        echo $this->html;
    }
}
