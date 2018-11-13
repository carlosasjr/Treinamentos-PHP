<?php

$xml = simplexml_load_file('paises3.xml');
var_dump($xml);

echo "Nome: " . $xml->nome . '<br>';
echo "Idioma: " . $xml->idioma . '<br><br>';

foreach ($xml->estados->estado as $estado) {
    echo str_pad('Estado: ' . $estado['nome'], 30) .
    'Capital:' . $estado['capital'] . '<br>';
}

echo '<hr>';

foreach ($xml->estados->estado as $estado) {
    foreach ($estado->attributes() as $key => $value) {
        echo $value . '<br>';
    }
}

