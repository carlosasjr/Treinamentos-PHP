<?php
require_once './class/Cachorro.class.php';


$toto = new Cachorro('Totó', '12/11/2018');

var_dump($toto->toXML());
