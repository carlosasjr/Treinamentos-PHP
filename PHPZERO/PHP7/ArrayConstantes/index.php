<?php
//Salvar arrays em constantes

//antes do php 7

define("CONFIG_DBNAME", 'banco');
define("CONFIG_DBUSER", 'root');
define("CONFIG_DBPASS", 'root');

echo CONFIG_DBNAME;
echo CONFIG_DBUSER;

//NO php 7

define("CONFIG" , array(
   'dbname' => 'banco',
   'dbuser' => 'root',
   'dbpass' => '',
));

echo CONFIG['dbname'];
echo CONFIG['dbuser'];
