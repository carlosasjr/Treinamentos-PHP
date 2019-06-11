<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 23/05/2019
 * Time: 10:57
 */

require 'Pessoa.class.php';
require 'PessoaAdapter.class.php';

$pessoa = new Pessoa('Carlos', 34);

$pa = new PessoaAdapter($pessoa);
$pa->setSexo('Masculino');

echo $pa->getNome() . '<br>';
echo $pa->getIdade() . '<br>';
echo $pa->getSexo();

