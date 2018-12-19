<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 07/12/2018
 * Time: 16:11
 */
require '../../../../public/index.php';

use App\ado\TTransaction;
use App\ado\TLoggerTXT;
use App\model\TAlunoRecord;

try {
    TTransaction::Open();

    //define o arquivo para log
    TTransaction::setLogger(new TLoggerTXT('..\..\logs\log4.txt'));

    //deleta o aluno de ID 1 carregando o objeto
    TTransaction::Log('Apagando carregando o objeto');
    $aluno = new TAlunoRecord(1);

    //Se o objeto foi carregado delete o registro
    if (!is_null($aluno->id)) :
        $aluno->delete();
    endif;


    //deletando o aluno de ID 2 sem testar se existe e sem carregar o objeto
    TTransaction::Log('Apagando diretamente');

    $aluno2 = new TAlunoRecord();
    $aluno2->delete(2);

    //finaliza a transação
    TTransaction::Close();

    echo "Alunos deletados com sucesso!<br>\n";
} catch (Exception $e) {
    echo '<b>Erro</b>' . $e->getMessage();
    TTransaction::Rollback();
}
