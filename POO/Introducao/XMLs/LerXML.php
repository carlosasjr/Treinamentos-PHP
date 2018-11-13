<?php

//retorna um SimpleXMLElement
$xml = simplexml_load_file('paises.xml');
var_dump($xml);

echo $xml->nome . "<br>\n";
echo $xml->idioma . "<br>\n";
echo $xml->religiao . "<br>\n";
echo $xml->moeda . "<br>\n";
echo $xml->populacao . "<br>\n";
echo "<br>\n";
echo $xml->geografia->clima . "<br>\n";
echo $xml->geografia->costa . "<br>\n";
echo $xml->geografia->pico . "<br>\n";
