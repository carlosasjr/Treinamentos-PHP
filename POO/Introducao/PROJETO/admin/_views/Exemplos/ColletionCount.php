<?php
require '../../../app.config/Config.inc.php';

try {
    //inicializa uma transação
    TTransaction::Open();


    //define o arquivo para LOG
    TTransaction::setLogger(new TLoggerTXT('..\..\logs\colletionCOUNT.txt'));

    //primeiro exemplo, conta todos alunos de porto alegre
    TTransaction::Log('Conta os alunos de Porto Alegre');

    //instancia um critério de seleção
    $criterio = new TCriterio();
    $criterio->add(new TFilter('cidade','=','Porto Alegre'));

    //instancia um repositório de Alunos
    $repository = new TRepository('Exemplos');
    $count = $repository->count($criterio);

    //exibe o total na tela
    echo "Total de alunos de Porto Alegre: {$count} <br>\n";


    //segundo exemplo, Contas todas as turmas com aula na sala
    //100 no turno da TARDE ou na 200 pel turno da manha.
    TTransaction::Log('**Conta Turmas');

    //instancia um critério de seleção
    //sala 100 e turno T (tarde)
    $criterio1 = new TCriterio();
    $criterio1->add(new TFilter('sala','=',100));
    $criterio1->add(new TFilter('turno','=','T'));

    //instancia um critério de seleção
    //sala 200 e turno M (manhã)
    $criterio2 = new TCriterio();
    $criterio2->add(new TFilter('sala','=', 200));
    $criterio2->add(new TFilter('turno','=', 'M'));

    //instancia um critério de seleção
    //com OU para juntos os critérios anteriores
    $criterio = new TCriterio();
    $criterio->add($criterio1, TExpression::OR_OPERATOR);
    $criterio->add($criterio2, TExpression::OR_OPERATOR);

    //instancia um repositório de Turmas
    $repository = new TRepository('Turma');
    //retorna quantos objetos satisfazem o critério
    $count = $repository->count($criterio);
    echo "Total de turmas {$count} <br>\n";


    //finaliza a transação
    TTransaction::Close();

} catch (Exception $e) {
    //exibe a mensagem gerada pela exceção
    echo '<b>Erro</b>' . $e->getMessage();
    //desfaz todas as alterações no banco de dados
    TTransaction::Rollback();
}
