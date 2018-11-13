<?php

require_once './class/Cachorro.class.php';

$toto = new Cachorro(1, 'Toto', '12/11/2018', 'ViraLara');

var_dump($toto);

$bilu = clone $toto;

var_dump($bilu);

