<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controler;
use App\Lista;
use Illuminate\Http\Request;
use Prophecy\Exception\Doubler\MethodNotFoundException;

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


        //pegar dados
        //$lista = Lista::where('id', '>', '10')->limit(3)->get();

        //deleta
        //Lista::where('id', '=', '10')->delete();

        $array = array('lista' => $lista);

        return view('home', $array);
    }

    public function add(Request $req)
    {
        //verifica se o campo foi preenchido
        if ($req->has('item')) {
            $item = $req->input('item');

            //insert em um novo registro
            $lista = new Lista();
            $lista->item = $item;
            $lista->save();

            //Para dar update primeiro localiza o registro com o find(id)
            /*
            $lista = Lista::find(5);
            $lista->item = 'Novo item';
            $lista->save();
            */


            return redirect('/');
        }
    }

    public function delete($id)
    {
        if (!empty($id)) {
            Lista::find($id)->delete();
        }
        return redirect('/');
    }
}