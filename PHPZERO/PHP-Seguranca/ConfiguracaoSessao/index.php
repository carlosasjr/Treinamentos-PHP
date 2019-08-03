<?php


//mudar o nome
//session.name = QUALQUERNOME

//no php.ini
//session.use_cookies = 1


//ativar
//session.use_only_cookies = 1
//session.cookie_secure = 1

//colocar 1
//session.cookie_httponly = 1


ini_set("session.name", 'SONLINE');
ini_set("session.use_cookies", 1);
ini_set("session.use_only_cookies", 1);
ini_set("session.cookie_secure", 1);
ini_set("session.cookie_httponly", 1);

phpinfo();

