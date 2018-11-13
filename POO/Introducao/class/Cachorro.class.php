<?php

/**
 * Cachorro.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Carlos Junior
 */
require_once './class/xmlBase.class.php';
class Cachorro extends xmlBase {

    private $Coleira;
    private $Nome;
    private $Nascimento;
    private $Raca;

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */

    public function __construct($Coleira, $Nome, $Nascimento, $Raca) {
        $this->Coleira = $Coleira;
        $this->Nome = $Nome;
        $this->Nascimento = $Nascimento;
        $this->Raca = $Raca;
    }

    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    function __set($name, $value) {
        if ($name == 'Nascimento'):
            //valida o valor atribuido a propriedade
            if (count(explode('/', $value)) == 3):
                echo "Dado '$value', atribuido à '$name' <br>\n ";
                $this->$name = $value;

            else:
                echo "Dado '$value', não atriuido à '$name' <br>\n ";
            endif;

        else:
            $this->$name = $value;

        endif;
    }

    public function __toString() {
        return $this->Nome;
    }
    
    public function __clone() {
        $this->Coleira += 1;
        $this->Nome .= ' Junior';
    }


}
