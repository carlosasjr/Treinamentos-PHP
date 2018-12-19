<?php

include_once '../../app.config/Config.inc.php';

$carlos = new TPessoa('Carlos', 1);
$maria = new TPessoa('Maria', 3);


echo $carlos->cidade->getNome();
echo '<br>';
echo $maria->cidade->getNome();

var_dump($carlos->cidade);



