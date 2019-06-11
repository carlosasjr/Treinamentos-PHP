<?php
if (isset($_FILES['foto'])) {
    $arquivo = $_FILES['foto'];

    move_uploaded_file($arquivo['tmp_name'], 'fotos/' . $arquivo['name']);
}

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

if ($nome) {
    echo "Arquivo de {$nome} enviado com sucesso!";
}
