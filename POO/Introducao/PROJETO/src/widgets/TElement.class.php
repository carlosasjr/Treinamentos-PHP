<?php

/**
 * TElement.class [ WIDGETS ]
 * Classe para abstração de tags HTML
 * @copyright (c) 2018, Carlos Junior
 */

namespace App\widgets;

class TElement
{
    private $name; //nome da TAG
    private $properties; //propriedades da TAG
    private $children;

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */
    /**
     *Método open
     *Exibe a tag de abertura na tela
     */
    private function open()
    {
        //exibe a tag de abertura
        echo "<{$this->name}";

        if ($this->properties) :
            foreach ($this->properties as $name => $value) :
                //percorre as propriedades
                echo " {$name}=\"{$value}\"";
            endforeach;
        endif;

        echo '>';
    }

    /**
     *Método close
     *Fecha uma tag HTML
     */
    private function close()
    {
        echo "</{$this->name}>\n";
    }


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */
    /**
     * Método constructor.
     * Instancia uma tag html
     * @param $name = nome da tag
     */
    public function __construct($name)
    {
        //define o nome do elemento
        $this->name = $name;
    }

    /**Método __set
     * Intercepta as atribuições à propriedades do objeto
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        //armazena os valores atribuidos
        //ao array properties
        $this->properties[$name] = $value;
    }

    /**
     * Método add
     * Adiciona um elemento filho
     * @param $child = objeto filho
     */
    public function add($child)
    {
        $this->children[] = $child;
    }


    public function show()
    {
        //abre a tag
        $this->open();
        echo "\n";

        //se possui conteudo
        if ($this->children) :
            //percorre todos objetos filhos
            foreach ($this->children as $child) :
                //se for objeto
                if (is_object($child)) :
                    $child->show();
                elseif ((is_string($child)) || (is_numeric($child))) :
                    //se for texto
                    echo $child;
                endif;
            endforeach;

            //fecha a tag
            $this->close();
        endif;
    }
}
