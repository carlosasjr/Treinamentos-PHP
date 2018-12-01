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

    /** <b>Metodo getInstruction</b>
     * Retorna a instrução de SELECT em forma de string
     * @return string Instrução SQL- SELECT
     * */
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

    /** <b>Metodo __construct</b>
     * Instancia um novo objetio do tipo SQLSelect 
     * @param String $Entity = 'Nome da Tabela'
     * @param Objeto TCriterio = Objeto do tipo TCriterio 
     *  */
    public function __construct($Entity = null, TCriterio $Criterio = null) {
        $this->Entity = (string) $Entity;

        if (isset($Criterio)):
            $this->setCriterio($Criterio);
        endif;
    }

    /** <b>Metodo addColumn</b>
     * Adiciona uma coluna no SELECT [$Coluna]
     * @param String $Coluna = 'Coluna'
     *  */
    public function addColumn($Coluna) {
        $this->Columns[] = $Coluna;
    }

    /**
     * <b>Metodo getResult:</b> Retorna um array com todos os resultados obtidos. Envelope primário númérico. Para obter
     * um resultado chame o índice getResult()[0]!
     * @return ARRAY $this = Array ResultSet
     */
    public function getResult() {
        return $this->Result;
    }

    /** <b>Metodo Execute</b>
     * Executa a instrução SELECT no banco de Dados     
     *  */
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

    /** <b>Metodo FullSQL</b>
     * Executa a instrução SELECT no banco de Dados     
     *  */
    public function FullSQL($SQL, PDO $Transaction = Null) {
        $this->Sql = $SQL;

        parent::Connect($Transaction);

        try {
            parent::$Statement->execute();
            $this->Result = parent::$Statement->fetchAll();
        } catch (PDOException $e) {
            WSErro("<b>Erro ao executar a consulta:</b> {$e->getMessage()}", $e->getCode());
        }
    }

}
