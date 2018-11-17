<?php

/**
 * TSQLDelete.class [ SQLInstruction ]
 * Esta classe provê meios para manipulação de uma instrução de DELETE no banco de dados
 * @copyright (c) 2018, Carlos Junior
 */
class TSQLDelete extends TSqlInstruction {

    public $Result;

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */

    protected function getInstruction() {
        $this->Sql = "DELETE FROM {$this->Entity}";

        if ($this->Criterio):
            $this->Sql .= " WHERE " . $this->Criterio->dump();
        endif;
    }

    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function __construct($Entity, TCriterio $Criterio) {
        $this->Entity = (string) $Entity;

        if (!$Criterio):
            WSErro("<b>Critério do objeto TSQLDelete não foi informado:</b>", 999);
            die;
        else:
            $this->setCriterio($Criterio);
        endif;
    }

    public function Execute() {
        $this->getInstruction();

        parent::Connect();

        try {
            parent::$Statement->execute();
            $this->Result = True;
        } catch (PDOException $e) {
            WSErro("<b>Erro ao deletar o registro:</b> {$e->getMessage()}", $e->getCode());
        }
    }

}
