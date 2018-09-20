<?php

$xml = <<<XML
<alunos>
    <aluno>
        <nome>Thiago</nome>
        <curso>PHP Básico</curso>
    </aluno>
    <aluno>
        <nome>Pedro</nome>
        <curso>PHP Intermediário</curso>
    </aluno>
    <aluno>
        <nome>Cristina</nome>
        <curso>PHP Avançado</curso>
    </aluno>
</alunos>
XML;

$documento = simplexml_load_string($xml);

var_dump($documento);

//retorna o nome e o curso do 2 indice
var_dump($documento->aluno[2]);

//retorna o curso do aluno do 2 indice (Cristina)
var_dump($documento->aluno[2]->curso);

//lista os nomes dos alunos
foreach ($documento as $aluno) {
    echo $aluno->nome . '<br>';
}

