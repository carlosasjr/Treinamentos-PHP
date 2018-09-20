<?php

/**
 * Inimigo.class [ PERSONAGEM ]
 * Classe que herda de Ator
 * @copyright (c) 2018, Carlos Junior
 */
class Inimigo extends Ator {
    
    public function darPorrada() {
        echo 'Dar porrada no jogador' . '<br>';
    }
    
    //declarando o metodo abstrato da classe Ator    
    protected function setVida() {
        $this->vida = 100;
    }    
}
