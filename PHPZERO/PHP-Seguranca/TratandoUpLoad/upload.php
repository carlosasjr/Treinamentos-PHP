<?php

if (!empty($_FILES['foto']['tmp_name'])) {


    print_r($_FILES['foto']);

    if ($_FILES['foto']['type'] == 'image/png') {
        $nome = md5(rand(0, 9999) . time()) . '.png';

        move_uploaded_file($_FILES['foto']['tmp_name'], 'fotos/' . $nome);

        echo 'Foto carregada com sucesso!!';
    }
}
