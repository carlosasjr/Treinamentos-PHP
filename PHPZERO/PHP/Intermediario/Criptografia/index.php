<?php

//criptografia irreversivel
$nome = "Carlos";
$nome2 = md5($nome);

echo 'Nome Original: ' .  $nome . '<br>';
echo 'Nome Criptografado: ' .  $nome2;

echo '<hr>';

$nome3 = base64_encode($nome);
echo 'Nome Criptografado - base64_encode: ' .  $nome3 . '<br>';

echo 'Descriptografar Q2FybG9z: ' . base64_decode('Q2FybG9z');