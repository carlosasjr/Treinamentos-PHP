<?php

$xml = simplexml_load_file('paises.xml');

$xml->religiao = 'Cristianismo';
$xml->populacao = '258 Milhoes';
$xml->geografia->clima = 'Temperado';

//cria uma nova tag
$xml->addChild('Presidente', 'Bolsonaro');

//ler o novo xml
echo $xml->asXML();

//grava o novo xml
file_put_contents('paises2.xml', $xml->asXML());

$xml2 = simplexml_load_file('paises2.xml');
var_dump($xml2);

