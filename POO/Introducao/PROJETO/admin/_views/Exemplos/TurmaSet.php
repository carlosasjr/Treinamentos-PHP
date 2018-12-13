<?php
include_once '..\..\..\app.config\Config.inc.php';

try {
    TTransaction::Open();

    //define o arquivo para log
    TTransaction::setLogger(new TLoggerTXT('..\..\logs\setTurma.txt'));

    //obtem turma
    $turma = new TTurmaRecord(1);
    echo $turma->professor . "<br>\n";
    $turma->dia_semana = 8;

    var_dump($turma);


} catch (Exception $e) {
    echo '<b>Erro</b>' . $e->getMessage();
    TTransaction::Rollback();

}