<?php

for ($i = 1; $i <= 10; $i++ ):
    echo "Laço For: {$i}";
    echo "<br>";
endfor;


echo "<br>";


$tabuada = 2;

for($i = $tabuada; $i <= $tabuada * 10; $i+=$tabuada):
    echo "{$tabuada} <br>";
endfor;


echo "<br>";

$tabuada = 2;

for ($i = 1; $i <= 10; $i++ ):
    echo "{$i} X $tabuada = " . $i * $tabuada . '<br>';
endfor;

