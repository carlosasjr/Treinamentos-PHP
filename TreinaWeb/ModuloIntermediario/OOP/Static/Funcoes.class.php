<?php

/**
 * Funcoes.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Carlos Junior
 */
class Funcoes {
    
    private static $nome = 'Carlos';
    
    //uma classe com metodos static não precisa ser instânciado
    static public function ValidaEmail($email) {
      return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    
    static public function getNome() {
        //para obter o valor de uma propriedade statis é preciso usar
        //static:: ou self::
        
        return static::$nome;
    }
    
    
}
