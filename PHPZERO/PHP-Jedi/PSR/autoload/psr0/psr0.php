<?php
//Nome do arquivo deve sempre ser igual ao nome da classe

//autoloader
//PSR-0
spl_autoload_register(function ($class) {
    $file = 'classes/' . $class . '.class.php';
    if (file_exists($file)) {
        require($file);
    }
});

$aluno = new Aluno(10);
echo $aluno->getIdade();

