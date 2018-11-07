<?php

/**
 * Produto.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Carlos Junior
 */
class Produto {
    public $Codigo;
    public $Descricao;
    public $Preco;
    public $Quatidade;
    
    
/* * ************************************************ */
/* * ************* METODOS PRIVADOS ***************** */
/* * ************************************************ */


/* * ************************************************ */
/* * ************* METODOS PUBLICOS ***************** */
/* * ************************************************ */
public function ImprimeEtiqueta() {
    print 'Código: ' . $this->Codigo . "<br>\n";
    print 'Descrição: ' . $this->Descricao . "<br>\n";
}  
    
}
