<?php
require '../../../../public/index.php';

use App\ado\TTransaction;
use App\model\TTurmaRecord;
use App\ado\TLoggerTXT;

try {
    TTransaction::Open();

    //define o arquivo para log
    TTransaction::setLogger(new TLoggerTXT('..\..\logs\setTurma.txt'));

    //obtem turma
    $turma = new TTurmaRecord(1);
    echo $turma->professor . "<br>\n";
    $turma->dia_semana = 0;

    var_dump($turma);
} catch (Exception $e) {
    echo '<b>Erro</b>' . $e->getMessage();
    TTransaction::Rollback();
}
