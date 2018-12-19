<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 07/12/2018
 * Time: 10:48
 */

require '../../../../public/index.php';

use App\ado\TTransaction;
use App\ado\TLoggerTXT;
use App\ado\TRepository;
use App\ado\TFilter;
use App\ado\TCriterio;
use App\model\TAlunoRecord;
use App\model\TCursoRecord;

try {
    TTransaction::Open();

    //define o arquivo para log
    TTransaction::setLogger(new TLoggerTXT('..\..\logs\log2.txt'));

    //exibe algumas mensagens na tela
    echo "obtendo alunos<br>\n";
    echo "====================<br>\n";

    //obtém aluno de ID 1
    $aluno = new TAlunoRecord(3);
    echo "Nome: " . $aluno->nome . "<br>\n";
    echo "Endereço: " . $aluno->endereco . "<br>\n";

    //obtém aluno de ID 2
    $aluno = new TAlunoRecord(4);
    echo "Nome: " . $aluno->nome . "<br>\n";
    echo "Endereço: " . $aluno->endereco . "<br>\n";


    //obtém alguns cursos
    echo "obtendo cursos<br>\n";
    echo "====================<br>\n";

    //obtem o curso de ID 1
    $curso = new TCursoRecord(1);
    echo "Curso: " . $curso->descricao . "<br>\n";

    $curso = new TCursoRecord(2);
    echo "Curso: " . $curso->descricao . "<br>\n";

    $criterio = new TCriterio();
    $criterio->add(new TFilter('id', '>=', '0'));

    $repo = new TRepository('Aluno');
    $alunos = $repo->load($criterio);

    var_dump($alunos);

    TTransaction::Close();
    echo 'Registros exibidos com sucesso<br>';
} catch (Exception $e) {
    echo '<b>Erro</b>' . $e->getMessage();
    TTransaction::Rollback();
}
