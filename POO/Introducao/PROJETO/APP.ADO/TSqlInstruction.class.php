<?php

/**
 * TSqlInstruction.class [ ABSTRACT ]
 * Esta classe provê os métodos em comum entre todas as instruções
 * SQL (SELECT, INSERT, DELETE E UPDATE)
 * @copyright (c) 2018, Carlos Junior
 */
abstract class TSqlInstruction extends TConn {

    protected $Sql; //armazena a instrução SQL
    /** @var TCriterio */
    protected $Criterio; //armazena o objeto critério
    protected $Entity; //armaze a tabela

    /** @var PDOStatement */
    protected static $Statement;

    /** @var PDO */
    protected static $Conn;

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */

    public static function getConn() {
        return parent::getConn();
    }

//Obtém o PDO e Prepara a query
    protected function Connect() {
        self::$Conn = parent::getConn();     
        self::$Statement = self::$Conn->prepare($this->Sql);
    }

    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    /** <b>Metodo setEntity</b>
     * Define o nome da entidade (tabela) manipulada pela instrução SQL
     * @param $Entity = tabela
     * */
    final public function setEntity($Entity) {
        $this->Entity = $Entity;
    }

    /** <b>Metodo getEntity</b>
     * Retorna o nome da entidade (tabela) manipulada pela instrução SQL
     * @return string = tabela
     * */
    final public function getEntity() {
        return $this->Entity;
    }

    /** <b>Metodo setCriterio</b>
     * Define um critério de seleção dos dados através da composição de um objeto
     * do tipo TCriterio, que oferece uma interface para definição de critérios
     * @param $Criterio = objeto do tipo TCriterio
     * */
    public function setCriterio(TCriterio $Criterio) {
        $this->Criterio = $Criterio;
    }

    /** <b>Metodo getInstruction</b>
     * Declarando-o como <abstract> obrigando sua declaração nas classes filhas,
     * uma vez que seu comportamento será distinto em cada uma delas. Usando o conceito de polimorfismo. 
     * */
    abstract protected function getInstruction();

    /** <b>Metodo Execute</b>
     * Declarando-o como <abstract> obrigando sua declaração nas classes filhas,
     * uma vez que seu comportamento será distinto em cada uma delas. Usando o conceito de polimorfismo. 
     * */
    abstract function Execute();
}
