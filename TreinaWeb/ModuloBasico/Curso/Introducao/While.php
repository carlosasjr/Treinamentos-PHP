<?php

$i = 0;

while ($i < 5):
    $i++;
    echo "<h{$i}>Interação</h{$i}}";
    echo "<br>";
endwhile;


echo "<br>";
echo "<br>";

$a = 0;

while ($a < 100):
    echo "Treinando {$a}";
    echo "<br>";
    
    if ($a == 5):
        break;
    endif;
    
    $a++;
endwhile;


echo "<br>";
echo "<br>";


$y = 10;

while ($y >= 1):
    echo "{$y} <br>";
    $y--;
endwhile;


echo "<br>";
echo "<br>";

$x = 11;
do{
  echo "Impreme {$x} <br>";
 
    if ($x == 20):
        break;
    endif; 
    
   $x++;
   
} while ($x > 10);
   




