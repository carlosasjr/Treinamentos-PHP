<?php

/**
 * Cliente.class [ CADASTRO ]
 * Cadastro de cliente hada de Pessoa
 * @copyright (c) 2018, Carlos Junior
 */
class Cliente extends Pessoa {
    protected $codigo;
   
    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = (int) $codigo;
    }


}
