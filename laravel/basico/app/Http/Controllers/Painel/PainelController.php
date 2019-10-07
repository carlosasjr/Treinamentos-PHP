<?php
//php artisan make:controller Painel\\PainelController

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PainelController extends Controller
{
    public function index() {
        return 'Site do Painel';
    }
}
