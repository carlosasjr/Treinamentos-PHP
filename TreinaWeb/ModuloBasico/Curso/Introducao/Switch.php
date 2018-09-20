<?php

$i = 50;

if ($i == 10):
    echo "I é igual a 10";
elseif ($i == 20):
    echo "I é igual que 20";
elseif ($i == 30):
    echo "I é igual que 30";
else :
    echo "Não é nenhum valor testado";
endif;

echo "<hr>";

switch ($i):
    case 10 :
        echo "I é igual é 10";
        break;
    case 20 :
        echo "I é igual que 20";
        break;
    case 30 :
        echo "I é igual que 30";
        break;
    default:
        echo "Não é nenhum valor testado";
        break;
endswitch;
