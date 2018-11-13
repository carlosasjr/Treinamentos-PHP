<?php
require_once './class/Interfaces/IAluno.php';
require_once './class/Aluno.php';;


$aluno = new Aluno();
$aluno->setNome('Carlos;');
echo $aluno->getNome();

