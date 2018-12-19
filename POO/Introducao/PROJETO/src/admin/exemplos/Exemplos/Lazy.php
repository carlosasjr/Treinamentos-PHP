<?php
require '../../../../public/index.php';

use App\ado\TTransaction;
use App\ado\TLoggerTXT;
use App\model\TInscricaoRecord;
use App\model\TAlunoRecord;

try {
    //inicia transação com o banco
    TTransaction::Open();
    //define o log
    TTransaction::setLogger(new TLoggerTXT('..\..\logs\lazy.txt'));

    //armazena frase no log
    TTransaction::Log('**obtendo o aluno de uma inscrição');


    //instancia a inscrição cujo ID é 5
    $inscricao = new TInscricaoRecord(5);
    //exibe os dados relacionados de alno (associação)
    echo "Dados da inscrição<br>\n";
    echo "==================<br>\n";


    $aluno = $inscricao->getaluno();

    echo 'Nome      : ' . $aluno->nome . "<br>\n";
    echo 'Endereco  : ' . $aluno->endereco . "<br>\n";
    echo 'Cidade    : ' . $aluno->cidade . "<br>\n";

    //armazena frase no log
    TTransaction::Log('**obtendo as inscrições de um aluno');

    //instancia o aluno cujo Id é
    $aluno = new TAlunoRecord(5);

    echo "<br>\n";
    echo "Dados da inscrição<br>\n";
    echo "==================<br>\n";


    //exibe os dados relacionados de inscrições (agregação)
    if ($aluno->inscricoes) {
        foreach ($aluno->inscricoes as $inscricao) :
            echo ' ID    : ' . $inscricao->id;
            echo ' Turma : ' . $inscricao->ref_turma;
            echo ' Nota  : ' . $inscricao->nota;
            echo ' Freq  : ' . $inscricao->frequencia;
            echo "<br>\n";
        endforeach;
    };

    TTransaction::Close();
} catch (Exception $e) {
    echo $e->getMessage();
    TTransaction::Rollback();
}
