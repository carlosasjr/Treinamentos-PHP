<?php

/**
 * Contato.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Carlos Junior
 */
class Contato {
    public $Nome;
    public $Telefone;
    public $Email;
    
/* * ************************************************ */
/* * ************* METODOS PRIVADOS ***************** */
/* * ************************************************ */


/* * ************************************************ */
/* * ************* METODOS PUBLICOS ***************** */
/* * ************************************************ */
    
public function SetContato($Nome, $Telefone, $Email) {
    $this->Nome = $Nome;
    $this->Telefone = $Telefone;
    $this->Email = $Email;
}

public function GetContato() {
   return "Nome: {$this->Nome}, Telefone: {$this->Telefone}, Email: {$this->Email}" ;
}

    
}
