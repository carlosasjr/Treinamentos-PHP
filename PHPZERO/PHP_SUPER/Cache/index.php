<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 23/05/2019
 * Time: 15:32
 */

require 'Cache.class.php';

//testa a data de modificação de um arquivo
function isValido($arq)
{
    $ultimaModificacao = filemtime($arq); //pega a data de modificação
    $dtControle = time() - $ultimaModificacao;

    if ($dtControle > 10) {
        return false;
    } //maior q 10 seg.

    return true;
}

$cache = new Cache();

$p = 'adicionar'; //nome da pagina


if (isset($_GET['p']) && !empty($_GET['p']) && file_exists('paginas/' . $p . '.php')) {
    $p = $_GET['p'];
}

$arq = 'caches/' . $p . '.cache';

if (file_exists($arq) && isValido($arq)) {
    echo $cache->getVar($arq, 'html');
} else {
    ob_start();
    require 'paginas/' . $p . '.php';
    $html = ob_get_contents();
    ob_end_clean();

    $cache->setVar($arq, 'html', $html);
    echo $html;
}


