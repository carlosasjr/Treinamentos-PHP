<?php
//php artisan make:controller Site\\SiteController

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    //middleware no construtor
    public function __construct()
    {
        //coloca filtro de auth em todos os métodos do controller.
        //$this->middleware('auth');

        //definir quais metodos terão filtro
        //$this->middleware('auth')->only('index'); //para um método especifico.

       // $this->middleware('auth')->only(['contato', 'categoria']);


        //filtrar todos os métodos exceto o informado
        //$this->middleware('auth')->except('contato');
      //  $this->middleware('auth')->except(['index', 'contato']);
    }

    public function index()
    {
        $dados = array();

        //$dados['teste'] = 123;
        //return view('teste', $dados);

        $title = "Cursos de Laravel";
        $var1 = '123';

        $xss  = '<script>alert("Ataque XSS")</script>';

        //$dados = array(1,2,3,4,5,6,7,8,9);
        $dados = array();
        return view('site.home.index', compact('title', 'xss', 'var1', 'dados'));

        //return view('site.home.index');


      }

    public function contato()
    {
        return view('site.contato.index');
    }

    public function categoria($id)
    {
        return 'Categoria ' . $id;

    }

    public function categoriaOP($id = 'Default')
    {
        return 'Categoria ' . $id;

    }
}
