<?php

$alunos = [
    ['id' => 1,
        'nome' => 'Carlos Antonio',
        'cidade' => 'Aparecida'
    ],
    ['id' => 2,
        'nome' => 'Maria Eugenia',
        'cidade' => 'Aparecida'
    ],
    ['id' => 3,
        'nome' => 'Samuel Henrique',
        'cidade' => 'Aparecida'
    ]
];

var_dump($alunos);

$dom = new DOMDocument();

$treinaweb = $dom->createElement('treinaweb');

foreach ($alunos as $aluno):
    extract($aluno);
    $alunoTag = $dom->createElement('aluno');
    $alunoTag->setAttribute('id', $id);
    $alunoTag->appendChild($dom->createElement('nome', $nome));
    $alunoTag->appendChild($dom->createElement('cidade', $cidade));
    $treinaweb->appendChild($alunoTag);
endforeach;

$dom->appendChild($treinaweb);
$dom->formatOutput = true;
$dom->save('treinaweb.xml');

    


