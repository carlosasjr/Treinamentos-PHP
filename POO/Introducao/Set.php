<?php

require_once './class/Cachorro.class.php';

$toto = new Cachorro('Totó');

$toto->Nascimento = '3 de março';
$toto->Nascimento = '10/04/2015';

var_dump($toto);