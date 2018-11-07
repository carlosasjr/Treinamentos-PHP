<?php

/**
 * Pessoa.class [ TIPO ]
 * Descricao
 * @copyright (c) year, Carlos Junior
 */
class Pessoa {

    public $Codigo;
    public $Nome;
    public $Altura;
    public $Idade;
    public $Nascimento;
    public $Escolaridade;
    public $Salario;

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */
    
    function __construct($Codigo, $Nome, $Altura, $Idade, $Nascimento, $Escolaridade, $Salario) {
        $this->Codigo = $Codigo;
        $this->Nome = $Nome;
        $this->Altura = $Altura;
        $this->Idade = $Idade;
        $this->Nascimento = $Nascimento;
        $this->Escolaridade = $Escolaridade;
        $this->Salario = $Salario;
    }

    public function __destruct() {
        echo "Objeto {$this->Nome} Finalizado...<br>\n";
    }    
    


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    /** <b>Metodo Crescer</b>
     * Métódo para aumentar o tamanho da pessoa
     * @param string $centimetro = Crescer em Centimetros
     * @return int Altera a propriedade Altura
     *  */
    public function Crescer($centimetro) {
        if ($centimetro > 0):
            $this->Altura += $centimetro;
        endif;
    }

    /** <b>Metodo Formar</b>
     * Metódo para Formar uma Pessoa
     * @param string $Titulacao = Nova formação da pessoa
     * @return string Altera a escolaridade
     *  */
    public function Formar($Titulacao) {
        $this->Escolaridade = $Titulacao;
    }

    /** <b>Metodo Envelhecer</b>
     * Método para Alterar a idade de uma pessoa
     * @param int $anos Valor em anos
     * @return int Altera a idade da Pessoa somando ao valor informado
     *  */    
    public function Envelhecer($anos) {
        if ($anos > 0):
            $this->Idade += $anos;
        endif;
    }

}
