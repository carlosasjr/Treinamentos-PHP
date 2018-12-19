<?php

/**
 * TProduto.class [ CADASTRO ]
 * Representa um produto a ser vendido
 * @copyright (c) 2018, Carlos Junior
 */
final class TProduto {
    private $descricao; //descrição do produto
    private $estoque; //estoque atual
    private $precoCusto; //preço de custo
    
    
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */
    
    /**
     * Método construtor
     * Define os valores iniciais
     * @param string $descricao = Descrição do Produto
     * @param float $estoque = Quantidade em estoque
     * @param float $precoCusto = Preço de Custo
     */    
    public function __construct($descricao, $estoque, $precoCusto) {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->precoCusto = $precoCusto;
    }
    
    /**
     * Método <b>registraCompra</b>
     * Registra uma compra, atualiza custo e incrementa o estoque atual
     * @param float $unidades = Quantidade de Compra
     * @param float $precoCusto = Preço de Custo na Compra
     */
    public function registraCompra($unidades, $precoCusto) {
        $this->precoCusto = $precoCusto;
        $this->estoque += $unidades;
    }
    
    /**
     *  Método <b>registraVenda</b>
     * Registra uma venda e drementa o estoque
     * @param float $unidades = Quantidade Vendida
     */
    public function registraVenda($unidades) {
        $this->estoque -= $unidades; 
    }
    
    /**
     * Método <b>getEstoque</b>
     * Retorna a quantidade em estoque
     */
    public function getEstoque() {
        return $this->estoque;  
    }
    
    /**
     * Método <b>calculaPrecoVenda</b>
     * Retorna o preço de venda, baseado em uma margem de 30% sobre o custo
     */
    public function calculaPrecoVenda() {
     return $this->precoCusto * 1.3;   
    }
    
    
}
