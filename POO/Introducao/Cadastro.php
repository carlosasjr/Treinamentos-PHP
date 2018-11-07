<?php

require_once './class/Pessoa.class.php';
require_once './class/Conta.class.php';

$carlos = new Pessoa();
$carlos->Codigo = 10;
$carlos->Nome = 'Carlos';
$carlos->Altura = 1.85;
$carlos->Idade = 34;
$carlos->Nascimento = '23/06/1984';
$carlos->Escolaridade = 'Ensino Médio';

echo "Manipulando o objeto $carlos->Nome : <br>\n";
echo "{$carlos->Nome} é formado em {$carlos->Escolaridade} <br>\n";
$carlos->Formar('Técnico em Info.');
echo "{$carlos->Nome} é formado em {$carlos->Escolaridade} <br>\n";

echo "{$carlos->Nome} é tem {$carlos->Idade} <br>\n";
$carlos->Envelhecer(2);
echo "{$carlos->Nome} é tem {$carlos->Idade} <br>\n";


$conta_carlos = new Conta();
$conta_carlos->Agencia = 1976;
$conta_carlos->Codigo = "CC.123456";
$conta_carlos->DataDeCriacao = '05/11/2018';
$conta_carlos->Titular = $carlos;
$conta_carlos->Senha = 123;
$conta_carlos->setSaldo(132.01);
$conta_carlos->Cancelada = false;

echo "<br>\n";

echo "Manipulando a conta de: {$conta_carlos->Titular->Nome} <br>\n";
echo "O Saldo atual é: R$ {$conta_carlos->ObterSaldo()}<br>\n";

$conta_carlos->Depositar(100);
echo "O Saldo atual é: R$ {$conta_carlos->ObterSaldo()}<br>\n";

$conta_carlos->Retirar(50);
echo "O Saldo atual é: R$ {$conta_carlos->ObterSaldo()}<br>\n";


       