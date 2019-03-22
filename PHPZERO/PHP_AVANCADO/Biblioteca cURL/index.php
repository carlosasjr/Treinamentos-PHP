<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 11/03/2019
 * Time: 10:37
 *
 * Biblioteca responsável por fazer requisições em servidores API
 */



$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://alunos.b7web.com.br/api/ping");

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "nome=Carlos&idade&34");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$resposta =  curl_exec($ch);
curl_close($ch);

print_r($resposta);
