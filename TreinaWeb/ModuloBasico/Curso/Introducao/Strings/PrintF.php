<?php

$frase = 'Meu nome é %s, e meu saldo é de %.2f';

printf($frase, 'Carlos', '50');

echo "<hr>";

$arr = ['Carlos', '150'];

vprintf($frase, $arr);


