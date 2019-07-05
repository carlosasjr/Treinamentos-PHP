<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class Controller
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function loadTemplate($viewName, $viewData = array())
    {
        require 'views/template.php';
    }

    public function loadViewInTemplate($viewName, $viewData = array())
    {
        extract($viewData);
        require 'views/' . $viewName . '.php';
    }
}
