<?php

/**
 * Livro [ TIPO ]
 * Cadastra um livro
 * @copyright (c) year, Carlos Junior
 */
class Livro {
    public $codigo;
    public $titulo;
    public $preco;
    
    public function Cadastrar(){
        echo "Cadastra o livro {$this->titulo} no banco de dados!";
    }
    
    public function Mostrar(){
        echo "Codigo: " . $this->codigo . '<br>';
        echo "Titulo: " . $this->titulo . '<br>';
    }
}
