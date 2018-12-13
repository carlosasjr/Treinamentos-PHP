<?php
require '../../../app.config/Config.inc.php';

try {
    //inicia uma transação
    TTransaction::Open();

    // define o arquivo para LOG
    TTransaction::setLogger(new TLoggerTXT('..\..\logs\colletionDELETE.txt'));

    //instancia critério de seleção aluno_ref = 1
    $criterio = new TCriterio();
    $criterio->add(new TFilter('ref_aluno', '=', 1));

    //instancia repositorio de inscrição
    $repository = new TRepository('Inscricao');

    //deleta todos os registros que satisfizerem o critério de seleção
    $result = $repository->delete($criterio);

    if ($result) {
        echo "Arquivo deletado com sucesso<br>\n";
    }

    //finaliza uma transação
    TTransaction::Close();

} catch (Exception $e) {
    //exibe a mensagem gerada pela exceção
    echo '<b>Erro</b>' . $e->getMessage();
    //desfaz todas as alterações no banco de dados
    TTransaction::Rollback();
}
