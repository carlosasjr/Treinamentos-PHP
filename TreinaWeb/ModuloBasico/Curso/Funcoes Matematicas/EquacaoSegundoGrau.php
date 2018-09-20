<?php

$a = 1;
$b = -5;
$c = 4;

$delta = pow($b, 2) - 4 * $a * $c;

if ($delta < 0):
    echo 'Conjunto vazio';
else:
    $basc1 = (-$b + sqrt($delta)) / (2 * $a);
    $basc2 = (-$b - sqrt($delta)) / (2 * $a);
    
    echo 'Conjunto {' . $basc1 . ','  . $basc2 . '}';
endif;

