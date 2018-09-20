<?php

require './Pessoa.class.php';
require './Cliente.class.php';
require './Funcionario.class.php';

$cli = new Cliente('José');
$cli->setCodigo(10);
$cli->setNascimento('23/06/1984');

echo $cli->getNome() . ' têm ' . $cli->getIdade();

echo "<br>";

$cli->exibe();

$funcionario = new Funcionario('Pedro');
$funcionario->setNascimento('10/07/1980');
$funcionario->setCargo('Analista Desenvolvedor');
$funcionario->setSalario(3200);

echo "<br>";

echo $funcionario->getNome() . ' têm ' . $funcionario->getIdade() . ' e ganha: ' . $funcionario->getSalario();

echo "<br>";
echo "<br>";

echo "<br>";



$funcionario->exibe();
