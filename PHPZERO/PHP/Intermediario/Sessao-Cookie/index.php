<?php
//Sessão
//Cria uma sessão no servidor
session_start(); //primeira linha
$_SESSION["usuario"] = 'Carlos Júnior'; //posso passar um array também

echo "Meu nome é: " . $_SESSION['usuario']; //antes de chamar um dado da sessão, eu preciso do comando : session_start();


//Cookie
//Guarda informações no pc do usuário
setcookie("meuteste", "fulano de tal", time() + 3600); //adicionou 1 hora de expiração
echo 'cookie setado corretamente';

//pegar informação do cookie
echo 'Meu cookie é de: ' . $_COOKIE['meuteste'];
