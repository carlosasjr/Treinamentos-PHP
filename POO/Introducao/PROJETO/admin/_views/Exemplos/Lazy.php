<?php
include_once '..\..\..\app.config\Config.inc.php';

try {
//inicia transação com o banco
    TTransaction::Open();
//define o log
    TTransaction::setLogger(new TLoggerTXT('..\..\logs\lazy.txt'));

    //armazena frase no log
    TTransaction::Log('**obtendo o aluno de uma inscrição');


//instancia a inscrição cujo ID é 2
    $inscricao = new TInscricaoRecord(2);
//exibe os dados relacionados de alno (associação)
    echo "Dados da inscrição<br>\n";
    echo "==================<br>\n";

    $aluno = $inscricao->getaluno();

    echo 'Nome      : ' . $aluno->nome . "<br>\n";
    echo 'Endereco  : ' . $aluno->endereco . "<br>\n";
    echo 'Cidade    : ' . $aluno->cidade . "<br>\n";

//armazena frase no log
    TTransaction::Log('**obtendo as inscrições de um aluno');

    //instancia o aluno cujo Id é 2
    $aluno = new TAlunoRecord(2);

    echo "<br>\n";
    echo "Dados da inscrição<br>\n";
    echo "==================<br>\n";

//exibe os dados relacionados de inscrições (agregação)
    foreach ($aluno->inscricoes as $inscricao):
        echo ' ID    : ' . $inscricao->id;
        echo ' Turma : ' . $inscricao->ref_turma;
        echo ' Nota  : ' . $inscricao->nota;
        echo ' Freq  : ' . $inscricao->frequencia;
        echo "<br>\n";
    endforeach;

    TTransaction::Close();


} catch (Exception $e) {
    echo $e->getMessage();
    TTransaction::Rollback();
}