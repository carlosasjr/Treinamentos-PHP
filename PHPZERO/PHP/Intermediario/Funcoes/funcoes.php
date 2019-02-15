<?php
function somarNumero($x, $y)
{
    return $x + $y;
}

echo somarNumero(10, 20);


echo "<hr>";

function operacao($operador, $x, $y)
{
    switch ($operador) {
        case '+':
            return $x + $y;
            break;
        case '-':
            return $x - $y;
            break;
    }
}

echo operacao('+', 10, 20);
echo "<hr>";
echo operacao('-', 10, 20);
