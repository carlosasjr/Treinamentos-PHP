<?php
namespace App\Controllers;

use Foundation\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return $this->render('index');
    }
}
