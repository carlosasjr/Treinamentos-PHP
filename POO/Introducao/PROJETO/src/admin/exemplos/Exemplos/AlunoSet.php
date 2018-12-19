<?php
require '../../../../public/index.php';

use App\ado\TTransaction;
use App\ado\TLoggerTXT;
use App\model\TAlunoRecord;
use App\model\TCursoRecord;

try {
    TTransaction::Open();

    //define o arquivo para log
    TTransaction::setLogger(new TLoggerTXT('..\..\logs\log1.txt'));

    //armazena frase no log
    TTransaction::Log('Inserindo alunos');

    //instancia um novo objeto Exemplos
    $daline = new TAlunoRecord();
    $daline->nome = 'Daline Dall Oglio';
    $daline->endereco = 'Rua da Conceição';
    $daline->telefone = '(51) 1111-2222';
    $daline->cidade = 'Cruzeiro do Sul';
    $daline->store();

    $willian = new TAlunoRecord();
    $willian->nome = 'Willian Scatolla';
    $willian->endereco = 'Rua da Fatima';
    $willian->telefone = '(51) 1111-4444';
    $willian->cidade = 'Aparecida';
    $willian->store();

    TTransaction::Log('Inserindo cursos');

    $curso = new TCursoRecord();
    $curso->descricao = 'Orientação a Objetos com PHP';
    $curso->duracao = 24;
    $curso->store();

    $curso = new TCursoRecord();
    $curso->descricao = 'Desenvolvendo em PHP';
    $curso->duracao = 22;
    $curso->store();

    TTransaction::Close();
    echo 'Registros inseridos com sucesso<br>';

} catch (Exception $e) {
    echo '<b>Erro</b>' . $e->getMessage();
    TTransaction::Rollback();
}
