<?php

//Imprimir apenas pares
for ($x = 1; $x <= 100; $x++):
    // % se o restante da divisão for diferente de 0 o numero é impar, então pula.
    if (($x%2) != 0) :
        continue;
    endif;
    
    echo "{$x} <br>";
endfor;
