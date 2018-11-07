<?php

require_once './class/Pessoa.class.php';
require_once './class/Conta.class.php';
require_once './class/ContaPoupanca.php';

$carlos = new Pessoa(10, 'Carlos', 1.85, 34, '23/06/1984', 'Ensimo Medio', 650.00);


echo "Manipulando o objeto $carlos->Nome : <br>\n";
echo "{$carlos->Nome} é formado em {$carlos->Escolaridade} <br>\n";
$carlos->Formar('Técnico em Info.');
echo "{$carlos->Nome} é formado em {$carlos->Escolaridade} <br>\n";

echo "{$carlos->Nome} é tem {$carlos->Idade} <br>\n";
$carlos->Envelhecer(2);
echo "{$carlos->Nome} é tem {$carlos->Idade} <br>\n";


$conta_carlos = new Conta(1976, 10, '2/06/2018', $carlos, '123', 3000.00);

echo "<br>\n";

echo "Manipulando a conta de: {$conta_carlos->Titular->Nome} <br>\n";
echo "O Saldo atual é: R$ {$conta_carlos->ObterSaldo()}<br>\n";

$conta_carlos->Depositar(100);
echo "O Saldo atual é: R$ {$conta_carlos->ObterSaldo()}<br>\n";

$conta_carlos->Retirar(50);
echo "O Saldo atual é: R$ {$conta_carlos->ObterSaldo()}<br>\n";



