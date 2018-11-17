<?php

/**
 * TSQLSelect [ SQLInstruction ]
 * Esta classe provê meios para manipulação de uma instrução de SELECT no banco de dados
 * @copyright (c) 2018, Carlos Junior
 */
class TSQLSelect extends TSqlInstruction {

    public $Result;
    private $Columns; //Array de colunas do Select

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */

    private function getTermos() {
        if ($this->Criterio):
            $this->Sql .= ' WHERE ' . $this->Criterio->dump();

            $order = $this->Criterio->getProperty('order');
            $limit = $this->Criterio->getProperty('limit');
            $offset = $this->Criterio->getProperty('offset');

            if ($order):
                $this->Sql .= ' ORDER BY ' . $order;
            endif;

            if ($limit):
                $this->Sql .= ' LIMIT ' . $limit;
            endif;

            if ($offset):
                $this->Sql .= ' OFFSET ' . $offset;
            endif;
        endif;
    }

    protected function getInstruction() {
        $this->Sql = "SELECT ";

        if ($this->Columns):
            $this->Sql .= implode(', ', $this->Columns);
        else:
            $this->Sql .= '*';
        endif;

        $this->Sql .= " FROM {$this->Entity}";

        $this->getTermos();
    }

    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function __construct($Entity, TCriterio $Criterio = null) {
        $this->Entity = (string) $Entity;

        if (isset($Criterio)):
            $this->setCriterio($Criterio);
        endif;
    }

    public function addColumn($Coluna) {
        $this->Columns[] = $Coluna;
    }

    public function getResult() {
        return $this->Result;
    }

    public function Execute() {
        $this->getInstruction();
        parent::Connect();

        try {
            parent::$Statement->execute();
            $this->Result = parent::$Statement->fetchAll();
        } catch (PDOException $e) {
            WSErro("<b>Erro ao executar a consulta:</b> {$e->getMessage()}", $e->getCode());
        }
    }

}
