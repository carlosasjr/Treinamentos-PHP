<?php

$dns = "mysql:host=localhost; dbname=livro; charset=utf8";
$user = 'root';
$senha = '123';

try {
    $db = new PDO($dns, $user, $senha, [
        PDO::ATTR_ERRMODE => pdo::ERRMODE_EXCEPTION
    ]);


    $sql = 'SELECT codigo, nome FROM famosos ORDER BY 1';

    $resultado = $db->query($sql);

    if ($resultado):
        while($row = $resultado->fetch(pdo::FETCH_OBJ)):
            echo $row->codigo . ' ' . $row->nome . '<br>';
        endwhile;
    endif;
} catch (PDOException $exc) {
    echo $exc->getMessage();
}
