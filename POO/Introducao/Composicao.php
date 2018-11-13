<?php

require_once './class/Fornecedores.class.php';
require_once './class/Contato.class.php';

$fornecedor = new Fornecedores();
$fornecedor->RazaoSocial = 'Produtos Bom Gosto S.A';

$fornecedor->SetContato('Mauro', '51 12 3105521', 'mauro@email.com');

echo $fornecedor->RazaoSocial . "<br><br>\n";
echo 'Informações do contato' . "<br>\n";
echo $fornecedor->GetContato();
