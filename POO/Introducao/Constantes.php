<?php

require_once './class/Biblioteca.class.php';
require_once './class/Aplicacao.class.php';

echo Biblioteca::Nome . Aplicacao::Ambiente . Aplicacao::Versao . "<br>\n";

new Aplicacao('Dia');
new Aplicacao('Gimp');

