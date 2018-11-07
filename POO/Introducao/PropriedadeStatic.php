<?php

require_once './class/Protesta.class.php';

$aplic1 = new Protesta('Dia');
$aplic2 = new Protesta('Gimp');
$aplic3 = new Protesta('GNumeric');

echo "Quantidade de aplicações = " . Protesta::$Quantidade;


