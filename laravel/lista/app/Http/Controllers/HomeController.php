<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controler;
use App\Lista;

class HomeController extends Controller
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function home()
    {
        $lista = Lista::all();

        $array = array('lista' => $lista);

        return view('home', $array);
    }
}