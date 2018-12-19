<?php

namespace App\model;

/**
 * .class [ RECORD ]
 * Persiste o aluno no banco de dados
 * @copyright (c) 2018, Carlos Junior
 */

use App\ado\TCriterio;
use App\ado\TRepository;
use App\ado\TFilter;
use App\ado\TRecord;

class TAlunoRecord extends TRecord
{

    /*     * ************************************************ */
    /*     * ************* METODOS PRIVADOS ***************** */
    /*     * ************************************************ */


    /*     * ************************************************ */
    /*     * ************* METODOS PUBLICOS ***************** */
    /*     * ************************************************ */
    public function getinscricoes()
    {

        //cria um critério de seleção
        $criterio = new TCriterio();
        //filtra por código do aluno
        $criterio->add(new TFilter('ref_aluno', '=', $this->id));

        //instancia repositório de Inscrições
        $repository = new TRepository('inscricao');
         //retorna todas as inscrições que satisfazer o critério
        return $repository->load($criterio);
    }

    public function inscrever($turma)
    {
        //instancia uma inscrição
        $inscricao = new TInscricaoRecord();

        //define algumas propriedade
        $inscricao->ref_aluno = $this->id;
        $inscricao->ref_turma = $turma;

        //persiste a inscrição
        $inscricao->store();
    }
}
