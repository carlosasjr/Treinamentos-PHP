<?php

require 'environment.php';

$config = array();

if (ENVIRONMENT == 'development') {
    define("BASE_URL", "http://localhost/Treinamentos/PHPZERO/WEBSERVICES/API/");
    $config['dbname'] = 'todo';

    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    define("BASE_URL", "http://www.meusite.com.br/");
    $config['dbname'] = 'todo';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

global $db;

try {
    $options = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    $db = new PDO(
        "mysql:dbname=" . $config['dbname'] . ";host=" . $config['host'],
        $config['dbuser'],
        $config['dbpass'],
        $options
    );
} catch (PDOException $e) {
    echo "ERRO: " . $e->getMessage();
};


