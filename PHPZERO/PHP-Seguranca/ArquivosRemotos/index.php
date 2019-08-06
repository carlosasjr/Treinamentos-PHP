<?php

require 'header.php';


$p = 'home';

if (!empty($_GET['p'])) {
    $pagina = $_GET['p'];

    if (strpos($pagina, '.') === false) {
        if (file_exists('paginas/' . $pagina . '.php')) {
            $p = $pagina;
        }
    }
}

require 'paginas/' . $p . '.php';

require 'footer.php';

//php.ini

// allow_url_fopen = off
// allow_url_include = off