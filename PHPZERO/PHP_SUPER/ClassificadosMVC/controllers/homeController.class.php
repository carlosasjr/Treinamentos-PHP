<?php

/**
 * .class [ TIPO ]
 *
 * @copyright (c) 2018, Carlos Junior
 */
class homeController extends Controller
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function index()
    {
        $dados = array();

        $a = new Anuncios();
        $u = new Usuarios();
        $c = new Categorias();

        $filtros = array(
            'categoria' => '',
            'valor' => '',
            'estado' => ''
        );

        if (isset($_GET['filtros'])) {
            $filtros = $_GET['filtros'];
        }


        $porPagina = 2;
        $total_anuncios = $a->getTotalAnuncios($filtros);
        $total_usuario = $u->getTotalUsuarios();
        $p = 1;

        if (isset($_GET['p']) && !empty($_GET['p'])) {
            $p = addslashes($_GET['p']);
        }

        $total_paginas = ceil($total_anuncios / $porPagina);

        $anuncios = $a->getUltimosAnuncios($p, $porPagina, $filtros);
        $categorias = $c->getLista();

        $dados['total_anuncios'] = $total_anuncios;
        $dados['total_usuario'] = $total_usuario;
        $dados['categorias'] = $categorias;
        $dados['filtros'] = $filtros;
        $dados['anuncios'] = $anuncios;
        $dados['total_paginas'] = $total_paginas;
        $dados['p'] = '';


        $this->loadTemplate('home', $dados);
    }

}