<?php

//Consistem em passar funções para variaveis.

$somar = function ($valor1, $valor2) {
    return $valor1 + $valor2;
};

echo $somar(10, 10);

echo "<br>";

function execFuncao($qtd, $clouser) {
    for ($i = 0; $i <= $qtd; $i++):
        $clouser();
    endfor;
}

$imprime = function () {
    echo "Meu nome é Carlos <br>";
};

execFuncao(3, $imprime);

echo "<hr>";

execFuncao(10, function () {
    echo "Meu nome é Carlos <br>";
}
);
