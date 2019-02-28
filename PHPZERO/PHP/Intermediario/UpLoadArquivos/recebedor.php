<?php
$arquivo = $_FILES['arquivo'];

if (isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])) {

    $ext = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
    echo $ext;

    $nomearquivo = md5(time() . rand(0, 99)) . '.' . $ext;

    move_uploaded_file($arquivo['tmp_name'], 'arquivos/' . $nomearquivo);

    echo 'Arquivo enviado com sucesso...';
}

