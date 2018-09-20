<?php

/**
 * Arquivo.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Carlos Junior
 */
class Arquivo {
 protected $nome;
 protected $conteudo;
 
 public function __construct($nome = '', $conteudo = '') {
     $this->nome = $nome;
     $this->conteudo = $conteudo;
 }
 
 public function setNome($nome) {
     $this->nome = $nome;
 }

 public function setConteudo($conteudo) {
     $this->conteudo = $conteudo;
 }
 
 public function salvar(){
  printf("<p>O arquivo <strong>%s</strong> foi salvo!</p>", $this->nome);
  printf("<p>Conteudo: <strong>%s</strong></p>", $this->conteudo);
 }


}
