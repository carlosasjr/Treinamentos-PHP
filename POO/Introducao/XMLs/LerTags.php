<?php

$xml = simplexml_load_file('paises.xml');
var_dump($xml);

//lendo primeiro elemento
foreach ($xml->children() as $elemento => $valor) {
    if ($valor):
        echo $elemento . ': ' . $valor . '<br>';

    endif;
}

