<?php

/**
 * Cesta.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Carlos Junior
 */
class Cesta {
    /** @var Produto */
    private $Itens;
    
    
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */
    
    /** <b>Metodo AdicionaItem</b>
     * Metódo para adicionar itens a Cesta
     * @param Produto $Item = Recebe um objeto do tipo Produto
     * @return Produto Inclui um Produto ao Item da Cesta.
     *  */    
    public function AdicionaItem(Produto $Item) {
        $this->Itens[] = $Item;
    }
    
    /** <b>Metodo ExibeLista</b>
     * Metódo para exibir a lista de produtos contido nos itens da Cesta
     * @return Produto Imprime a Etiqueta do objeto Produto
     *  */    
    public function ExibeLista() {
        foreach ($this->Itens as $item) {
            $item->ImprimeEtiqueta();
        }
    }
    
    /** <b>Metodo CalculaTotal</b>
     * Metódo para calcular a somatório dos preços dos produtos contido nos itens da Cesta
     * @return float Com o total acumulado dos preços.
     *  */ 
    public function CalculaTotal() {
        $total = 0;
        foreach ($this->Itens as $Item) {
            $total += $Item->Preco;
        }
        
        return 'R$' . $total;
    }
    
}
