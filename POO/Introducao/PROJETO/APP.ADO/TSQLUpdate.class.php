<?php

/**
 * TSQLUpdate.class [ SQLInstruction ]
 * Esta classe provê meios para manipulação de uma instrução de UPDATE no banco de dados
 * @copyright (c) 2018, Carlos Junior
 */
class TSQLUpdate extends TSqlInstruction {

    private $Dados; // Array com o Dados para Instrução
    public $Result;

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */

    /** <b>Metodo getInstruction</b>
     * Retorna a instrução de UPDATE em forma de string
     * @return string Instrução SQL- UPDATE
     * */
    protected function getInstruction() {
        $this->Sql = "UPDATE {$this->Entity}";

        //monta os pares; coluna=valor,...

        if ($this->Dados):
            foreach ($this->Dados as $column => $value) {
                $set[] = "{$column} = :{$column}";
            }

            $this->Sql .= ' SET ' . implode(', ', $set);


            //retorna a clausula WHERE do objeto $this->Criterio
            if ($this->Criterio):
                $this->Sql .= ' WHERE ' . $this->Criterio->dump();
            endif;
        endif;
    }

    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    /** <b>Metodo __construct</b>
     * Instancia um novo objetio do tipo SQLUpdate 
     * @param String $Entity = 'Nome da Tabela'
     * @param Array $Dados = Array associativo com os dados a serem alterados [campo => valor] 
     *  */
    public function __construct($Entity, $Dados, TCriterio $Criterio) {
        $this->Entity = (string) $Entity;
        $this->Dados = (array) $Dados;

        if (!$Criterio):
            WSErro("<b>Critério do objeto TSQLUpdate não foi informado:</b>", 999);
            die;
        else:
            $this->setCriterio($Criterio);
        endif;
    }

    /** <b>Metodo Execute</b>
     * Executa uma instrução UPDATE no banco de dados
     * @return Result = Retorna na propriedade [Result] se os dados foram alterados [True ou False]
     *  */
    public function Execute() {
        $this->getInstruction();

        parent::Connect();

        try {
            parent::$Statement->execute($this->Dados);
            $this->Result = True;
        } catch (PDOException $e) {
            WSErro("<b>Erro ao executar a atualização:</b> {$e->getMessage()}", $e->getCode());
            throw new Exception();
        }
    }

}
