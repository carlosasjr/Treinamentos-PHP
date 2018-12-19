<?php
define('APP_ROOT', dirname(__DIR__));

// CONFIGURAÇÕES DO BANCO ####################
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '123');
define('DBSA', 'projetopdo');
define('TYPE', 'mysql');

// DEFINE SERVIDOR DE E-MAIL ################
define('MAILUSER', 'email@dominio.com.br');
define('MAILPASS', 'senhadoemail');
define('MAILPORT', 'postadeenvio');
define('MAILHOST', 'servidordeenvio');

// DEFINE IDENTIDADE DO SITE ################
define('SITENAME', 'Cidade Online');
define(
    'SITEDESC',
    'Este site foi desenvolvido no curso de PHP Orientado a Objetos da  TREINAMENTOS. O mesmo utiliza a arquitetura semântica do HTML5 e foi criado com as últimas técnologias disponíveis!'
);

// DEFINE A BASE DO SITE ####################
define('HOME', 'https://localhost/cursos/ws_php/modulos/12-projeto-final');
define('THEME', 'cidadeonline');

define('INCLUDE_PATH', HOME . '/themes/' . THEME);
define('REQUIRE_PATH', 'themes' . DIRECTORY_SEPARATOR . THEME);

// TRATAMENTO DE ERROS #####################
//CSS constantes :: Mensagens de Erro
define('WS_ACCEPT', 'accept');
define('WS_INFOR', 'infor');
define('WS_ALERT', 'alert');
define('WS_ERROR', 'error');
