<?php

require_once './class/Funcionario.class.php';

$pedro = new Funcionario();
$pedro->setSalario(800);

echo "Salário: {$pedro->getSalario()}";

