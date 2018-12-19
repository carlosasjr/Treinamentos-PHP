<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */

namespace App\controler;

use App\model\MyModel;

class MyControler
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */
    public function view()
    {
        $model = new MyModel();
        $data = $model->read();

        return compile(APP_ROOT . '/resources/view/index.phtml', ['data' => $data]);
    }
}