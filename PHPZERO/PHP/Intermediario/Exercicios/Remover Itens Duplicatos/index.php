<?php
$array = array(1, 2, 1, 6, 8, 4, 6, 9);
echo implode(',', $array);

$novo = array();

foreach ($array as $valor) {
    if (!in_array($valor, $novo)) {
        $novo[] = $valor;
    }
}

echo '<hr>';
echo implode(',', $novo);
