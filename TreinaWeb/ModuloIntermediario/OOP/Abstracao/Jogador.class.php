<?php

/**
 * Jogador.class [ PERSONAGEM ]
 * Classe que herda de Ator
 * @copyright (c) 2018, Carlos Junior
 */
class Jogador extends Ator {
    
    public function Atirar() {
        echo 'Atirar no inimigo' . '<br>';
    }
    
    //declarando o metodo abstrato da classe Ator    
    protected function setVida() {
        $this->vida = 200;
    }
    
}
