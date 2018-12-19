<?php

/**
 * TStyle.class [ WIDGETS ]
 * Classe para abstração de Estilos CSS
 * @copyright (c) 2018, Carlos Junior
 */

namespace App\widgets;

class TStyle
{
    private $name; //nome do estilo
    private $properties; //atributos
    private static $loaded; // array de estilos carregados

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */
    /**
     * TStyle constructor.
     * Instancia um estilo css
     * @param string $name = nome da propriedade
     */

    public function __construct($name)
    {
        //atribui o nome do estilo
        $this->name = $name;
    }

    /**
     * Método __set
     * intercepta as atribuições à propriedades do objeto     *
     * @param string $name = nome da propriedade
     * @param string $value = valor
     */
    public function __set($name, $value)
    {
        //troca o "_" por "-" no nome da propriedade
        $name = str_replace('_', '-', $name);

        //armazena os valores atribuidos ao array properties
        $this->properties[$name] = $value;
    }

    public function show()
    {
        //verifica se este estilo já foi carregado
        if (!isset(self::$loaded[$this->name])) :
            echo "<style type = 'text/css' media='screen'>\n";

            //exibe a abertura do estilo
            echo ".{$this->name}\n";
            echo "{\n";

            if ($this->properties) :
                //percorre as properties
                foreach ($this->properties as $name => $value) :
                    echo "\t {$name}: {$value};\n";
                endforeach;
            endif;
            echo "}\n";
            echo "</style>\n";

            //marca o estilo como já carregado
            self::$loaded[$this->name] = true;
        endif;
    }
}
