<?php

/**
 * Pessoa.class [ CADASTRO ]
 * Classe base para as pessoas
 * @copyright (c) 2018, Carlos Junior
 */
class Pessoa {
    protected $nome;
    protected $nascimento;
    
  public function __construct($nome = '')
    {
        $this->setNome($nome);
    }    
    
    public function getNome() {
        return $this->nome;
    }

    public function getNascimento() {
        return $this->nascimento;
    }

    public function setNome($nome) {
        $this->nome = ucfirst($nome);
    }

    public function setNascimento($nascimento) {
        $this->nascimento = str_replace('/', '-', $nascimento) ;
    }
    
    public function getIdade() {
       $nascimento = new DateTime($this->nascimento);
       $hoje = new DateTime('today');
       
       return  $nascimento->diff($hoje)->y;
    }
    
    public function exibe() {
       echo $this->nome . '<br>';
       echo $this->nascimento . '<br>';
       
    }


}
