<?php 

//Inclui o arquivo que possui a classe de autoloader
require_once('Autoloader/Autoloader.php');

//Instancia a classe de autoloader
$autoloader = new Autoloader();

//Registra no php para usar esse autoloader
$autoloader->registrar();

use Banco\Agencia;
use Banco\Cliente;
use Banco\Conta\ContaCorrente;
use Banco\Conta\ContaPoupanca;


//Instancia 2 agencias
$paulista = new Agencia('0942', 'Av. Paulista, 1500');
$brigadeiro = new Agencia('0942', 'Av. Brigadeiro, 1556');

//Instancia 2 clientes
$joao = new Cliente('João', 'joao@treinaweb.com.br', 'Av Paulista, 1222');
$pedro = new Cliente('Pedro', 'pedro@treinaweb.com.br', 'Av Paulista, 1222');

//Instancia 2 contas
$c2278 = new ContaCorrente('2278', $paulista, $joao, 100, 1000);
$c990323 = new ContaPoupanca('990323', $brigadeiro, $pedro, 500);


echo "Conta Corrente 2278";
$c2278->saldo();
$c2278->entrada(250);
$c2278->entrada(250);
$c2278->saldo();
$c2278->saida(350);
$c2278->saldo();
$c2278->saida(700);
$c2278->saldo();
$c2278->saida(1000); //Não faz essa operação porque passa do limite
$c2278->saldo();
$c2278->extrato();
$c2278->CalculaJuros(); 


echo "<br><br> Conta poupança 990323 <br>";
$c990323->saldo();
$c990323->entrada(250);
$c990323->entrada(250);
$c990323->saldo();
$c990323->saida(350);
$c990323->saldo();
$c990323->saida(700);
$c990323->saldo();
$c990323->saida(1000); //Não faz essa operação porque conta poupança não tem limite
$c990323->saldo();
$c990323->extrato();

$c990323->CalculaRendimentos();


