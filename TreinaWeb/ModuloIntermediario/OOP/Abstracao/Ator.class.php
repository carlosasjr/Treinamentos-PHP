<?php

/**
 * Ator.class [ CLASSE ABSTRACT ]
 * Classe abstrata de base para os tipos de personagens
 * @copyright (c) 2018, Carlos Junior
 */
abstract class Ator {
 protected $vida;
 
 public function __construct() {
     $this->setVida();
 }
        
 
 abstract protected function setVida(); 


 public function darDano() {
     $this->vida -= 50; 
 }
}
