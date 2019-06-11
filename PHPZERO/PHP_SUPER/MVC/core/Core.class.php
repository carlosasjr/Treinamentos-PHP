<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class Core
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function run()
    {
        $url = '/';

        $link = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);

        if ($link) {
            $url .= $link;
        }

        $params = array();

        if (!empty($url) && $url != '/') {
            $url = explode('/', $url);
            array_shift($url);

            $currentController = $url[0] . 'Controller';
            array_shift($url);

            if (isset($url[0]) && !empty($url['0'])) {
                $currentAction = $url[0];
                array_shift($url);

            } else {
                $currentAction = 'index';
            }

            if (count($url) > 0) {
                $params = $url;
            }

        } else {
            $currentController = 'homeController';
            $currentAction = 'index';
        }


        //Erro 404
        if (!file_exists('controllers/' . $currentController . '.class.php') || !method_exists($currentController, $currentAction)) {
            $currentController = 'notfoundController';
            $currentAction = 'index';
        }

        $c = new $currentController();
        call_user_func_array(array($c,  $currentAction), $params);

    }
}