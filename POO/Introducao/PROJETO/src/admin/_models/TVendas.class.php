<?php

/**
 * TVendas.class [ MOVIMENTACAO ]
 * Representa uma venda de um produto
 * @copyright (c) 2018, Carlos Junior
 */
final class TVendas {

    private $itens; //Itens da venda

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    /**
     * Método <b>addItem</b>
     * Adiciona um item na venda
     * @param float $quantidade = Quantidade Vendida       
     * @param TProduto $produto = Objeto do tipo TProduto
     */
    public function addItem($quantidade, TProduto $produto) {
        $this->itens[] = array($quantidade, $produto);
    }

    /**
     * Método <b>getItens</b>
     * @return array = Array com os itens da venda
     */
    public function getItens() {
        return $this->itens;
    }

    public function finalizaVenda() {
       $total = 0;
        foreach ($this->itens as $item):
            $quantidade = $item[0];

            /* @var $produto TProduto */
            $produto = $item[1];


            //soma o total
            $total += $produto->calculaPrecoVenda() * $quantidade;

            //diminui estoque
            $produto->registraVenda($quantidade);
        endforeach;


        return $total;
    }

}
