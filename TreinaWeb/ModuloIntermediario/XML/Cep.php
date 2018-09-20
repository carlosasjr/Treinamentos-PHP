<?php

$cep = $_GET['cep'];

$xml = file_get_contents("http://api.postmon.com.br/v1/cep/{$cep}?format=xml");

$end = new SimpleXMLElement($xml);

var_dump($end);

echo $end->cidade . $end->cidade_info->codigo_ibge;
        
