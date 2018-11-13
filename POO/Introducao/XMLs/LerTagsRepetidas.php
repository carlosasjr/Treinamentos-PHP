<?php

$xml = simplexml_load_file('paises2.xml');
var_dump($xml);

echo "Nome: " . $xml->nome .'<br>';
echo "Idioma: " . $xml->idioma.'<br><br>';

echo "****Estados***<br>";
foreach ($xml->estados->uf as $uf) {
    echo $uf . '<br>';
}


//acesando diretamento um estado
echo $xml->estados->uf[2];//mg