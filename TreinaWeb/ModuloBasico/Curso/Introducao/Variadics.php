<?php

//Variadics consistem em passar dados para uma função sem definir o numero de parametros
// é possivel utilizar de dois modos
// variadics é definido por ...$nomeDaVariavel


function media(...$parms) {
    $soma = 0;
    
    foreach ($parms as $value) {
        $soma += $value;
    }
    
    return $soma / count($parms);
}


echo media(10,20);
echo "<br>";
echo media(20,30,50);

function imprime($param1, $param2, $param3){
    echo $param1;
    echo "<br>";    
    echo $param2;
    echo "<br>";    
    echo $param3;    
}

echo "<br>";

$nome = ['Carlos', 'José', 'Maria'];

imprime(...$nome);
        
