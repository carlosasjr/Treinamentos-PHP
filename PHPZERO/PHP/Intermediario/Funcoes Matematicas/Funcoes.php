<?php

//numero absoluto
echo abs(-10);

echo "<br>";

//arredondar baseado no numero
echo round(2.8); // 3

echo "<br>";

echo round(2.4); // 2

echo "<br>";

echo round(2.5); // 3


echo "<br>";

//arredonda para cima
echo ceil(2.5); // 3

echo "<br>";

echo ceil(2.2); // 3


//arredonda para baixo
echo floor(2.9); //2

echo "<br>";

//retorna um numero aleatorio
echo rand(0, 1000);

echo "<br>";

//sorteio
$lista = array("Carlos", "Maria", "Samuel");
$x = rand(0, 2);

echo $lista[$x];

echo "<br>";


