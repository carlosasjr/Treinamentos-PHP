<?php

require 'environment.php';
global $config;

$config = array();

if (ENVIRONMENT == 'development') {
    define("BASE_URL", "http://localhost/Treinamentos/PHPZERO/MVC-Composer-API/");
    $config['dbname'] = 'projeto_webservice';

    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
    $config['jwt_secret_key'] = 'pl4c32k@16';
} else {
    define("BASE_URL", "http://www.meusite.com.br/");
    $config['dbname'] = 'projeto_webservice';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
    $config['jwt_secret_key'] = 'pl4c32k@16';
}


//MENSAGENS DO SISTEMA
define('MSG_EMAIL_SENHA', 'Email e/ou Senha não preenchido');
define('MSG_ACESSO_NEGADO', 'Acesso negado!');
define('MSG_EMAIL_EXISTE', 'E-mail já existe!');
define('MSG_EMAIL_INVALIDO', 'E-mail inválido');
define('MSG_DADOS_NAO_PREENCHIDOS', 'Dadas não preenchidos');
define('MSG_METODO_INCOMPATIVEL', 'Método de requisição incompativel!');
define('MSG_METODO_NAO_DISPONIVEL', 'Método não disponivel');
define('MSG_USUARIO_NAO_EXISTE', 'Usuário não existe!');
define('MSG_PROIBIDO_EDITAR', 'Não é permitido editar outro usuário!');
define('MSG_PROIBIDO_DELETAR', 'Não é permitido excluir outro usuário!');
define('MSG_PHOTO_NAO_EXISTE', 'Essa foto não existe, ou pertence a outro usuário!');
define('MSG_COMENTARIO_VAZIO', 'Comentário Vazio!');
define('MSG_COMENTARIO_NAO_PODE_DELETAR', 'Este comentário não pode ser deletado!');


//FIM MENSAGEM DO SISTEMA


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


