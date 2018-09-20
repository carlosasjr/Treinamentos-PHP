<?php 

//Inclui o arquivo que possui a classe de autoloader
require_once('Autoloader/Autoloader.php');

//Instancia a classe de autoloader
$autoloader = new Autoloader();

//Registra no php para usar esse autoloader
$autoloader->registrar();

//Instancia cada uma das classes usando seu namespace
$judo 		 = new Esportes\ArtesMarciais\Judo();
$formula1	 = new Esportes\Corridas\Formula1();
$brasileirao = new Esportes\EsportesComBola\Futebol\Campeonatos\Brasileirao();



