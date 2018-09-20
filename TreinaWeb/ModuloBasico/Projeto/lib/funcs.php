<?php

function rotas($pagina) 
{
    switch ($pagina) {
        case 'orcamentos':
            require 'paginas/orcamentos.php';
            break;
        case 'sobre':
            require 'paginas/sobre.php';
            break;
        case 'criar':
            require 'paginas/criar.php';
            break;
        default:
            require 'paginas/home.php';
    }
}

function active($pagina, $link='')
{
    if ($pagina == $link) {
        return 'class="active"';
    }
    return '';
}

function connecta () {
    $con = mysqli_connect(HOST, USER, PASS, BANCO);
    
    if ($con):
        return $con;
    endif;
}

function formatReais($valor) {
    return 'R$ ' . number_format($valor, 2, ',','.');
}
    
    