<?php

include_once './class/Pessoa.class.php';
include_once './class/Conta.class.php';
include_once './class/ContaPoupanca.php';
include_once './class/ContaCorrente.class.php';


//criando objeto $carlos
$carlos = new Pessoa(10, 'Carlos', '1.85', 25, '10/04/1984', 'Médio', 6500.00);
echo "Manipulando o objeto {$carlos->Nome}<br>\n";

echo "<br>\n";

//Criação do ojeto $conta_carlos
$contas[1] = new ContaCorrente(6677, 'CC.123.56', '10/07/2018', $carlos, 9876, 500.00, 200.00);
$contas[2] = new ContaPoupanca(6678, 'PP.123.56', '10/07/2018', $carlos, 9876, 500.00, '10/07');

//percorremos as contas

foreach ($contas as $key => $conta):
    echo "Manipulando a conta {$key} de: {$conta->Titular->Nome}<br>\n";
    echo "O Saldo atual da conta {$key} é R\$ {$conta->ObterSaldo()}<br>\n";
    $conta->Depositar(200);
    echo "O Saldo atual da conta {$key} é R\$ {$conta->ObterSaldo()}<br>\n";
    $conta->Retirar(100);
    echo "O Saldo atual da conta {$key} é R\$ {$conta->ObterSaldo()}<br>\n";
    echo "<br>\n";
endforeach;





