<?php
include_once './PROJETO/APP.CONFIG/Config.inc.php';

try {
    TTransaction::Open();    
    
    $conn = TTransaction::Get();
    
    $famosos = ['nome' => 'Samuel Henrique'];
    $criterio = new TCriterio();
    $criterio->add(new TFilter('codigo', '=', 8));

    $update = new TSQLUpdate('famosos', $famosos, $criterio);
    $update->Execute();

    if ($update->Result):
        echo "1 update Alterado com sucesso..";
    endif;
    
   
    //forçando o erro nome do campo inválido
    $famosos = ['nome_' => 'Maria Eugenia dos Santos'];
    $criterio = new TCriterio();
    $criterio->add(new TFilter('codigo', '=', 7));

    $update = new TSQLUpdate('famosos', $famosos, $criterio);
    $update->Execute();

    if ($update->Result):
        echo "2 update Alterado com sucesso..";
    endif;


    TTransaction::Close();
    
    
} catch (Exception $exc) {
    
    TTransaction::Rollback();
    echo $exc->getTraceAsString();
}


