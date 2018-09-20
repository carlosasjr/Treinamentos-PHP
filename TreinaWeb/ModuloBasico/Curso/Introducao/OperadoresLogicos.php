<?php

$a = 20;
$b = 20;
$c = 30;

//Operador && igual
if ($a < $b && $b < $c):     
    echo "Verdadeiro";
else: 
    echo "Falso";
endif;

echo "<br>";

//Operador || ou
if ($a < $b || $b < $c):     
    echo "Verdadeiro";
else: 
    echo "Falso";
endif;

echo "<br>";


//Operador ! not
$result = !($a < $b);
if ($result):     
    echo "Verdadeiro";
else: 
    echo "Falso";
endif;

