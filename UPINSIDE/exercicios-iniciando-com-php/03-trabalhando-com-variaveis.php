<?php
//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

//Variáveis Normais
$meuNome = "CARLOS A. SANTOS JÚNIOR";
$minha_empresa = " Treinamentos";

$idadeDoCliente = 29;
$idade_do_cliente = 29;

echo "Meu nome é {$meuNome}. Eu trabalho na {$minha_empresa} e tenho {$idadeDoCliente} anos!<hr>";

//VAR de referência!
$var = "empresa";
$$var = "";
echo "Minha {$var} é a {$empresa}<hr>";

//Reescrita
$Nome = "Marcos";
echo "{$Nome}<br>";

$Nome = "Robson";

//Concatenação
$Nome .= " Leite";
echo "{$Nome}<br>";

$Nome = $meuNome;
echo "{$Nome}<br>";



