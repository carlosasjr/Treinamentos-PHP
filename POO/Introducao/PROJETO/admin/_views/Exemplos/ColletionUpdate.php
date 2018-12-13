<?php
require '../../../app.config/Config.inc.php';

try {
    //inicia transação com o banco
    TTransaction::Open();

    //define o arquivo para LOG
    TTransaction::setLogger(new TLoggerTXT('..\..\logs\colletionUPDATE.txt'));
    TTransaction::Log('seleciona inscrição da turma 2');

    //instancia critério de seleção de dados
    //seleciona todas inscrição da turma 2
    $criterio = new TCriterio();
    $criterio->add(new TFilter('ref_turma', '=', 2));
    $criterio->add(new TFilter('cancelada', '=', 0));

    //instancia repositório de Inscrição
    $repository = new TRepository('Inscricao');
    $inscricoes = $repository->load($criterio);

    //verifica se retornou alguma inscrição
    if ($inscricoes):
        TTransaction::Log('** altera as inscrições');

        //percorre todas as inscrições retornadas
        /* @var TInscricaoRecord $inscricao */
        foreach ($inscricoes as $inscricao):
            //altera algumas propriedades
            $inscricao->nota = 8;
            $inscricao->frequencia = 75;

            //armazena o objeto no banco de dados
            $inscricao->store();
        endforeach;;
    endif;

    //finaliza transação
    TTransaction::Close();


} catch (Exception $e) {
    //exibe a mensagem gerada pela exceção
    echo '<b>Erro</b>' . $e->getMessage();
    //desfaz todas as alterações no banco de dados
    TTransaction::Rollback();
}
