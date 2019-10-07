<?php
//php artisan make:controller Site\\SiteController

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        return 'Home page do site';
    }

    public function contato()
    {
        return 'Pagina de Contato';
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
