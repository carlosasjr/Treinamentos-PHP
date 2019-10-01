<?php

require 'Jwt.class.php';

$jwt = new jwt();

if (!empty($_GET['jwt'])) {
    $token = $_GET['jwt'];

    $info = $jwt->validate($token);

    if ($info) {
        echo "Token valido" . '<br>';

        echo "Meu nome é: " . $info->nome . ' User: ' . $info->id_user;
    } else {
        echo "Token inválido";
    }
} else
{
    echo "Token não enviado";
}

