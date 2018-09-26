<?php

$parse = 'link=$link&link2=$link2';

$teste = explode('&', $parse);

var_dump($teste);

parse_str($parse, $array);

var_dump($array);

