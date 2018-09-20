<?php

//altera a variavel por referencia
//e passado um array e remevido um item 
//a varivel que foi passa para a funcao tem seu item removido
function removeChave(&$array, $item) {
    if (isset($array[$item])):
        unset($array[$item]);
        return True;
    else:
        return False;
    endif;
}

$myArray = [
    0 => 'Carlos',
    1 => 'Maria',
    2 => 'José'
];

var_dump($myArray);

removeChave($myArray, 1);

var_dump($myArray);


