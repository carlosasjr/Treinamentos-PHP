<?php
include_once '..\..\..\app.config\Config.inc.php';

try {
//inicia transação com o banco
    TTransaction::Open();
//define o log
    TTransaction::setLogger(new TLoggerTXT('..\..\logs\buss.txt'));

    //armazena frase no log
    TTransaction::Log('**inserindo aluno');

    //instancia um aluno
    $carlos = new TAlunoRecord();
    $carlos->nome = 'Carlos Antônio';
    $carlos->enderec = 'Isaac Julio Barreto';
    $carlos->telefone = '(12) 33111714';
    $carlos->cidade = 'Aparecida';

    //persiste o objeto aluno
    $carlos->store();

    //armazena esta frase no log
    TTransaction::Log('inscrevendo o aluno nas turmas');

    //executa o método inscrever na turma 1 e 2
    $carlos->inscrever(1);
    $carlos->inscrever(2);


    //finaliza a transação
    TTransaction::Close();

} catch (Exception $e) {
    TTransaction::Rollback();
    echo $e->getMessage();
}