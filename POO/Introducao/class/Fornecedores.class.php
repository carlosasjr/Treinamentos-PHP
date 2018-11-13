<?php

/**
 * Fornecedores.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Carlos Junior
 */
class Fornecedores {

    public $Codigo;
    public $RazaoSocial;
    public $Endereco;
    public $Cidade;

    /** @var Contato */
    public $Contato;

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */

    public function __construct() {
        $this->Contato = new Contato();
    }

    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function SetContato($Nome, $Telefone, $Email) {
        //delega a chamada do método
        $this->Contato->SetContato($Nome, $Telefone, $Email);
    }

    public function GetContato() {
            return  $this->Contato->GetContato();
    }

}
