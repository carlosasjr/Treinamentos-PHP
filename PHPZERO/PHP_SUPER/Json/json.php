<?php

$json = file_get_contents("https://api.hgbrasil.com/weather/?format=json&woeid=455903");

//pega o retorno e cria um objeto
$json = json_decode($json);


/*
 *      "date": "05-29",
        "weekday": "Wed",
        "max": 30,
        "min": 16,
        "description": "Fair day",
        "condition": "cloudly_day"
 *
 */

//adicionando um objeto ao json
$obj = new stdClass();
$obj->date = '05-29';
$obj->weekday = 'Sabado';
$obj->max = '40';
$obj->min = '15';

//adicionei o objeto dentro do objeto json na lista
$json->results->forecast[] = $obj;

//acessar um campo do objeto json
echo $json->results->city . '<br>';
echo count($json->results->forecast) . '<br>';

//pegar dias da semana

foreach ($json->results->forecast as $item) {
    echo "Dias da semana: " . $item->weekday . '<br>';
    echo "Temp: Max: " . $item->max . " Min: " . $item->min;
    echo "<hr>";
}

//transforma objeto em json
echo json_encode($json);


//criar um json

$novoJson = array(
    "nome" => 'Carlos',
    "idade" => 34,
    "sexo" => 'Masculino'
);

echo json_encode($novoJson);