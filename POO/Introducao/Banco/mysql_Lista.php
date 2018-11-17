<?php

$db = new mysqli('localhost', 'root', '123', 'livro');

if ($db->connect_errno > 0):
    die('Ocorreu um erro ao acessar o banco de dados');
endif;

$db->set_charset('utf8');

$sql = 'SELECT codigo, nome FROM famosos ORDER BY 1';

if (!$resultado = $db->query($sql)):
    die('Ocorreu um erro na consulta SQL '. utf8_encode($db->connect_error));
endif;

while ($campo = $resultado->fetch_object()):
    echo $campo->codigo . ' ' . $campo->nome . '<br>'; 
endwhile;


echo $resultado->num_rows;




