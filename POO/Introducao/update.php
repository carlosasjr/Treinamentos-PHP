<?php

include_once './PROJETO/APP.CONFIG/Config.inc.php';

TTransaction::Open();

try {
   
    $famosos = ['nome' => 'Samuel Henrique'];
    $criterio = new TCriterio();
    $criterio->add(new TFilter('codigo', '=', 8));

    TTransaction::setLogger(new TLoggerHTML('PROJETO/LOGs/InstrucoesSQL.html'));
    TTransaction::Log("Atualizando cadastro do {$famosos['nome']}");
    
    $update = new TSQLUpdate('famosos', $famosos, $criterio);
    $update->Execute();

    /* if ($update->Result):
      echo "1 update Alterado com sucesso..";
      endif; */


    //forçando o erro nome do campo inválido
    $famosos = ['nome' => 'Maria Eugenia dos Santos'];
    $criterio = new TCriterio();
    $criterio->add(new TFilter('codigo', '=', 7));

    TTransaction::Log("Atualizando cadastro do {$famosos['nome']}");
    $update = new TSQLUpdate('famososs', $famosos, $criterio);
    $update->Execute();

    /* if ($update->Result):
      echo "2 update Alterado com sucesso..";
      endif; */


   TTransaction::Close();
    

} catch (Exception $e) {
    
    TTransaction::Rollback();

    WSErro("<b>Ocorreu um erro no processo..</b>", 999);
}


