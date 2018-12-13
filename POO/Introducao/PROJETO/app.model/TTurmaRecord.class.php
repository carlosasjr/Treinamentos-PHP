<?php

/**
 * .class [ RECORD ]
 * Persiste a Turma no banco de dados
 * @copyright (c) 2018, Carlos Junior
 */
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
        if (($valor >= 1) && ($valor <= 7)):

            $this->data['dia_semana'] = $valor;
        else:
            echo "Tentou atribuir {$valor} para dia da semana!";
        endif;
    }

    public function setturno($valor)
    {
        if ($valor == 'M' || $valor == 'T' || $valor == 'N'):
            $this->data['turno'] = $valor;
        else:
            echo "Tentou atribuir {$valor} para o turno!";
        endif;
    }
}