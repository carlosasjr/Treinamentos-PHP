<?php
require '../../../../public/index.php';

use App\ado\TTransaction;
use App\ado\TLoggerTXT;
use App\ado\TFilter;
use App\ado\TCriterio;
use App\ado\TRepository;
use App\model\TTurmaRecord;
use App\model\TAlunoRecord;

try {
    //inicia transação com o banco
    TTransaction::Open();

    //define o arquivo para LOG
    TTransaction::setLogger(new TLoggerTXT('..\..\logs\colletionGet.txt'));

    //primeiro exemplo, lista todas turmas em andamento no turno Tarde

    //cria um critério de seleção
    $criterio = new TCriterio();
    //filtra por turno e encerrada
    $criterio->add(new TFilter('turno', '=', 'T'));
    $criterio->add(new TFilter('encerrada', '=', 0));

    //instancia um repositório para Turma
    $repository = new TRepository('Turma');

    //retorna todos objetos que satisfazem o critério;
    $turmas = $repository->load($criterio);

    //verifica se retornou alguma turma
    if ($turmas) :
        echo "Turmas retornadas <br>\n";
        echo "=================<br>\n";

        //percorre todas turmas retornadas
        /* @var TTurmaRecord $turma */
        foreach ($turmas as $turma) :
            echo ' ID  : ' . $turma->id;
            echo ' Dia : ' . $turma->dia_semana;
            echo ' Sala :' . $turma->sala;
            echo ' Turno:' . $turma->turno;
            echo ' Professor:' . $turma->professor;

            echo "<br>\n";
        endforeach;
    endif;


    //segundo exemplo, lista todos aprovados da turma 1

    //instancia um criterio de seleção
    $criterio = new TCriterio();
    $criterio->add(new TFilter('nota', '>=', 7));
    $criterio->add(new TFilter('frequencia', '>=', 75));
    $criterio->add(new TFilter('ref_turma', '=', 1));
    $criterio->add(new TFilter('cancelada', '=', 0));
    $criterio->setProperty('ORDER', 'nota');

    //instancia um repositório para Inscrição
    $repository = new TRepository('Inscricao');
    //retorna todos objetos que satisfazerem o critério
    $inscricoes = $repository->load($criterio);

    //verifica se retornou alguma inscrição
    if ($inscricoes) :
        echo "<br>\n";
        echo "Inscrições retornadas <br>\n";
        echo "=================<br>\n";

        //percorre todas inscrições retornadas
        /* @var TInscricaoRecord $inscricao */
        foreach ($inscricoes as $inscricao) :
            echo ' ID    : ' . $inscricao->id;
            echo ' Exemplos : ' . $inscricao->ref_aluno;

            //obtém o aluno relacionado à inscrição
            $aluno = new TAlunoRecord($inscricao->ref_aluno);
            echo ' Nome : ' . $aluno->nome;
            echo ' End  : ' . $aluno->endereco;
            echo "<br>\n";
        endforeach;
    endif;


    //finaliza a transação
    TTransaction::Close();
} catch (Exception $e) {
    //exibe a mensagem gerada pela exceção
    echo '<b>Erro</b>' . $e->getMessage();
    //desfaz todas as alterações no banco de dados
    TTransaction::Rollback();
}
