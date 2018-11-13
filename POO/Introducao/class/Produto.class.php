<?php

/**
 * Produto.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Carlos Junior
 */
class Produto {
    public $Codigo;
    public $Descricao;
    private $Preco;
    public $Quatidade;
    
    public $Fornecedor;
    
    const MARGEM = 10;
    
    
/* * ************************************************ */
/* * ************* METODOS PRIVADOS ***************** */
/* * ************************************************ */
public function __construct($Codigo, $Descricao, $Quantidade, $Preco) {
    $this->Codigo = $Codigo;
    $this->Descricao = $Descricao;
    $this->Quatidade = $Quantidade;
    $this->Preco = $Preco;
}

/* * ************************************************ */
/* * ************* METODOS PUBLICOS ***************** */
/* * ************************************************ */

public function __get($propriedade) {
    echo "Obtendo o valor de {$propriedade} : \n"    ;
    
    if ($propriedade = 'Preco'):
        return $this->$propriedade * (1 + (self::MARGEM / 100));
    endif;
}

public function __call($metodo, $parametros) {
    echo "Você executou o método: {$metodo}";
    
    foreach ($parametros as $key => $parametro):
        echo "\tParâmetro $key: $parametro";
    endforeach;
}


public function ImprimeEtiqueta() {
    print 'Código: ' . $this->Codigo . "<br>\n";
    print 'Descrição: ' . $this->Descricao . "<br>\n";
}  
    
}
