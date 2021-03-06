<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 07/12/2018
 * Time: 13:36
 */

require '../../../../public/index.php';

use App\ado\TTransaction;
use App\ado\TLoggerTXT;
use App\model\TAlunoRecord;
use App\model\TCursoRecord;

try {
    //inicia uma transação com o banco
    TTransaction::Open();

    //define o arquivo para log
    TTransaction::setLogger(new TLoggerTXT('..\..\logs\log3.txt'));

    TTransaction::Log('Obtendo o aluno 1');

    //instancia registro de Exemplos

    $record = new TAlunoRecord();

    //obtém o Exemplos de ID 1
    /* @var TAlunoRecord $aluno */
    $aluno = $record->load(1);
    if ($aluno) : //verifica se ele existe
        //altera o telefone
        $aluno->telefone = '(51) 1111-3333';
        TTransaction::Log('Persistindo o aluno 1');
        $aluno->store();
    endif;

    TTransaction::Log('Obtendo o curso 1');

    //instancia registro de Curso
    $record = new TCursoRecord();
    //obtem o curso de ID 1
    /* @var TCursoRecord $curso */
    $curso = $record->load(1);
    if ($curso) :
        //altera duração
        $curso->duracao = 50;
        TTransaction::Log('Persistindo o curso 1');
        //armazena o objeto
        $curso->store();
    endif;

    //finaliza a transação
    TTransaction::Close();

    //exibe mensagem de sucesso
    echo "Registro alterados com sucesso<br>\n";

} catch (Exception $e) {
    //exibe mensagem gerada pela exceção
    echo '<b>Erro</b>' . $e->getMessage();

    //desfaz todas as alterações no banco de dados
    TTransaction::Rollback();
}