<?php
//antes do 7
$array = array('nome' => "Carlos", 'idade' => 90);

if (isset($array['idade'])) {
    $idade  = $array['idade'];
} else {
    $idade = '';
}

$idade = (isset($array['idade'])) ? $array['idade'] : '';

echo $idade;
echo '<hr>';


//no php 7

$idade = $array['idade'] ?? '';
echo $idade;
