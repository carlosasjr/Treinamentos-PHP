<?php

require_once './class/Funcionario.class.php';
require_once './class/Estagiario.class.php';

$pedrinho = new Estagiario();
$pedrinho->setSalario(248);

echo "Salario é de: {$pedrinho->getSalario()}";
