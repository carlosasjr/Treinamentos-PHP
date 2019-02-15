<?php

$dataatual = date("d/m/Y H:i:s");

echo $dataatual;  // 15/02/2019 17:56:00

echo "<hr>";

$dataTexto = date("d/m/Y \à\s H:i:s");

echo $dataTexto; // 15/02/2019 às 17:56:00

echo "<hr>";

$dataproxima = date('d/m/Y', strtotime("+10 day"));
echo $dataproxima;


