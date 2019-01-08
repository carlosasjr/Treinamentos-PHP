<?php

/**
 * TWindow.class [ WIDGETS ]
 * Classe para exibição de janelas
 * @copyright (c) 2018, Carlos Junior
 */

namespace App\widgets;

class TWindow
{
    private $x; //coluna
    private $y; //linha
    private $width; //largura
    private $height; //altura
    private $title; //titulo da janela
    private $content; //conteudo da janela
    private static $counter; //contador

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    /**
     * TWindows constructor.
     * @param string $title = Título da janela
     */
    public function __construct($title)
    {
        //incrementa o contador de janelas
        //para exibir da um com um ID diferente
        self::$counter++;
        $this->title = $title;
    }

    /**
     * Método setPosition
     * Defini a coluna e alinha(x, y) que a janela será exibida na tela
     * @param $x = Coluna (em pixels)
     * @param $y = Linha (em pixels)
     */
    public function setPosition($x, $y)
    {
        //atribui os pontos cardinais do canto superior esquerdo da janela
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * Método setSize
     * Define a largura e alturada janela em tela
     * @param $width = largura (em pixels)
     * @param $height = altura (em pixels)
     */
    public function setSize($width, $height)
    {
        //atribui as dimensões
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Método add
     * Adiciona um conteúdo à janela
     * @param $content = Conteúdo a ser adicionado
     */
    public function add($content)
    {
        $this->content = $content;
    }

    /**
     *Método show
     *Exibe a janela na tela
     */
    public function show()
    {
        $window_id = 'TWindow' . self::$counter;

        //instancia objeto TSyle para definir as características
        //de posicionamento e dimensão da camada criada
        $style = new TStyle($window_id);
        $style->position = 'absolute';
        $style->left = $this->x;
        $style->top = $this->y;
        $style->width = $this->width;
        $style->height = $this->height;
        $style->background = '#e0e0e0';
        $style->border = '1px solid #000000';
        $style->z_index = "10000";

        //exibe o estilo em tela
        $style->show();

        //cria tag <div> para a camada que representará janela
        $painel = new TElement('div');
        $painel->id = $window_id; //define o ID
        $painel->class = $window_id; // defina a classe

        //instancia objeto TTable;
        $table = new TTable();

        //defina as propriedade da tabela
        $table->width = '100%';
        $table->heigth = '100%';
        $table->style = 'border-collapse:collapse';

        //adiciona um linha para o título
        $row1 = $table->addRow();
        $row1->bgcolor = '#707070';
        $row1->height = '20px';

        //adiciona uma célula para o título
        $titulo = $row1->addCell("<font face=Arial size=2 color=white<b>{$this->title}</b></font>");
        $titulo->width = '100%';

        //cria um link com ação para esconder o <div>
        $link = new TElement('a');
        $link->add(new TImage("../../../../imagens/ico_close.png"));
        $link->onclick = "document.getElementById('$window_id').style.display='none'";

        //adiciona uma célula com o link de fechar
        $cell = $row1->addCell($link);

        //cria uma linha para o conteúdo
        $row2 = $table->addRow();
        $row2->valign = 'top';

        //adiciona o conteúdo ocupando duas colunas (cospan)
        $cell = $row2->addCell($this->content);
        $cell->colspan = 2;

        //adiciona a tabela ao painel
        $painel->add($table);
        $painel->show();
    }
}
