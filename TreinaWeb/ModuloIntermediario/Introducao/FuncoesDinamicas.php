<?php

function func1(){
    echo "Imprime a func1" . "<br>";
}


function func2($param){
    echo "Imprime a func2 " . $param . "<br>";
}


$var1 = 'func1';
$var2 = 'func2';


$var1();
$var2('Passando parametro');

