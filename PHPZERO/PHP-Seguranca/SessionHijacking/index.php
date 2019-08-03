<?php
session_start();

//cookie inspector para pegar o php session

if (empty($_SESSION['dono'])) {
    $_SESSION['dono'] = md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);
}

$token = md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);

//previnir o roubo de sessão
if ($_SESSION['dono'] != $token) {
    exit;
}

echo "Meu sistema etc...";
print_r($_SESSION);


