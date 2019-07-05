<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 05/07/2019
 * Time: 09:25
 */
require 'Tempo.class.php';


$t = '2019-07-03 08:00:00';
$data = date('d/m/Y H:i:s', strtotime($t));

echo $data . '<br/>foi há ' . Tempo::diferencaHoras($t) . ' atrás';
