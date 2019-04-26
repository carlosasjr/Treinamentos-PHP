<?php
//include_once '..\..\..\app.config\Config.inc.php';

require ('../../../../vendor/autoload.php');

use Respect\Validation\Validator;
use Carbon\Carbon;


var_dump( Validator::cpf()->validate('32079024809') ); // true
var_dump( Validator::cpf()->validate('79731627801') ); // false



echo Carbon::now('America/Sao_Paulo')->format('d/m/y H:i:s');

//retorna um objeto
$data = Carbon::now();

echo $data->addMinutes(30) . '<br>';
echo $data->addMinutes(30)->format('d/m/Y H:i:s') . '<br>';
echo $data->subMonth(2)->format('d/m/Y H:i:s') . '<br>';

//data que retorna de um form
$dataFormulario = '20/02/2014 12:00';
echo 'Data retornada de um form: ' . $dataFormulario . '<br>';

//formatar no Date ISO 2014-02-20 12:00:00
$data_format = Carbon::createFromFormat('d/m/Y H:i', $dataFormulario);

echo $data_format->day  . '<br>';
echo $data_format->month  . '<br>';
echo $data_format->year  . '<br>';








