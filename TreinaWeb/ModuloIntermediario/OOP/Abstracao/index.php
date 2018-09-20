<?php

require './Ator.class.php';
require './Jogador.class.php';
require './Inimigo.class.php';


$jogador = new Jogador();
$jogador->Atirar();
$jogador->darDano();

$monstro = new Inimigo();
$monstro->darPorrada();
$monstro->darDano();

var_dump($jogador, $monstro);