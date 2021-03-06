<?php

namespace App\model;

/**
 * .class [ RECORD ]
 * Persiste a Inscrição no banco de dados
 * @copyright (c) 2018, Carlos Junior
 */

use App\ado\TRecord;

class TInscricaoRecord extends TRecord
{
    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */

    /*
     * Método getaluno
     * Executado sempre que for acessada a propriedade "aluno"
     * @return TAlunoRecord = Retorna um objeto do tipo TAlunoRecord
     */
    public function getaluno()
    {
        //instancia AlunoRecord, carrega
        //na memória o aluno de código$this->ref_aluno
        $aluno = new TAlunoRecord($this->ref_aluno);

        //retorna o objeto instanciado
        return $aluno;
    }
}
