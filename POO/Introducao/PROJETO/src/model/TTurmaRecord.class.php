<?php

namespace App\model;

/**
 * .class [ RECORD ]
 * Persiste a Turma no banco de dados
 * @copyright (c) 2018, Carlos Junior
 */
use App\ado\TRecord;

class TTurmaRecord extends TRecord
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    public function setdia_semana($valor)
    {
        if (($valor <= 0) || ($valor > 7)) :
            echo "Tentou atribuir {$valor} para dia da semana!";
            die();
        endif;

        $this->data['dia_semana'] = $valor;
    }

    public function setturno($valor)
    {
        $valid = ['M', 'T', 'N'];

        if (!in_array($valor, $valid)) :
            echo "Tentou atribuir {$valor} para o turno!";
            die();
        endif;

        $this->data['turno'] = $valor;
    }
}
