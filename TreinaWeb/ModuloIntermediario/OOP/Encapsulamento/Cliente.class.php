<?php

/**
 * Cliente.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Carlos Junior
 */
class Cliente {

    public $nome;
    protected $email;
    
    protected $info;

    public function setEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)):
            $this->email = $email;
        else :
            exit("Email invalido");

        endif;
    }
    
    public  function setInfo($info){
        $this->info = $info;
    }

}
