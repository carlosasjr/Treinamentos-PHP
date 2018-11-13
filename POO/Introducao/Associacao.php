<?php

//Associação entre classes

require_once './class/Fornecedores.class.php';
require_once './class/Produto.class.php';

$fornecedor = new Fornecedores();
$fornecedor->Codigo = 848;
$fornecedor->RazaoSocial = 'Bom gosto alimentos S.A';
$fornecedor->Endereco = 'Rua ipiranga';
$fornecedor->Cidade = 'Poço de Caldas';

$produto = new Produto();
$produto->Codigo = 462;
$produto->Descricao = 'Doce de Pessego';
$produto->Preco = 1.24;
$produto->Fornecedor = $fornecedor;

$produto->ImprimeEtiqueta();

var_dump($produto);

echo 'Código: ' . $produto->Codigo  . "<br>\n";
echo 'Descrição: ' . $produto->Descricao . "<br>\n";
echo 'Código Fornecedor: ' . $produto->Fornecedor->Codigo . "<br>\n";
echo 'Razão do Fornecedor: ' . $produto->Fornecedor->RazaoSocial . "<br>\n";

