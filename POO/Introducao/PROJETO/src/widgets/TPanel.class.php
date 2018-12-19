<?php

/**
 * TPanel.class [ WIDGETS ]
 * Classe para exibição de painel de posições fixas
 * @copyright (c) 2018, Carlos Junior
 */

namespace App\widgets;

class TPanel extends TElement
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    /**
     * TPanel constructor.
     * Instancia objeto TPanel
     * @param $width = Largura do painel
     * @param $height = Altura do painel
     */
    public function __construct($width, $height)
    {
        //instancia objeto TStyle
        //para definir as caracteristicas do painel
        $painel_style = new TStyle('tpanel');
        $painel_style->position = 'relative';
        $painel_style->width = $width;
        $painel_style->height = $height;
        $painel_style->border = '2px solid';
        $painel_style->border_color = 'grey';
        $painel_style->background_color = '#f0f0f0';

        //exibe o estila na tela
        $painel_style->show();

        parent::__construct('div');
        $this->class = 'tpanel';
    }

    /**
     * Método put
     * Posiciona um objeto no painel
     * @param $widget = objeto a ser inserido no painel
     * @param $col = coluna em pixels
     * @param $row = linha em pixels
     */
    public function put($widget, $col, $row)
    {
        //cria uma camada para o widget
        $camada = new TElement('div');
        //define a posição da camada
        $camada->style = "position:absolute; left:{$col}px; top:{$row}px;";
        //adiciona o objeto (widget a camada recem criada
        $camada->add($widget);

        //adiciona o widget no array de elementos
        parent::add($camada);
    }
}
