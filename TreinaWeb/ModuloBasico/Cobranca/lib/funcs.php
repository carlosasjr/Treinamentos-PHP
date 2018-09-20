<?php

function rotas($pagina) {
    switch ($pagina) {
        case 'cobranca':
            require 'paginas/cobranca.php';
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

function active($pagina, $link = '') {
    if ($pagina == $link) {
        return 'class="active"';
    }
    return '';
}

function connecta() {
    $con = mysqli_connect(HOST, USER, PASS, BANCO);

    if ($con):
        return $con;
    endif;
}

function formatReais($valor) {
    return 'R$ ' . number_format($valor, 2, ',', '.');
}

function cobrarPorTipo($tipo, $valor) {
    if ($tipo == 'Residencial'):
        return formatReais($valor * (4 * 80) / 100);
    elseif ($tipo == 'Industria'):
       return formatReais($valor *  (4 * 90) / 100);
    else:
        return formatReais($valor * 4);
    endif;
}
