<?php

$con = mysqli_connect('localhost', 'root', '123', 'treinaweb');

$sql = "INSERT INTO clientes (nome, telefone, endereco) VALUES (" .
                             "'MARIA ANTONIETA', '01233111714', 'ISAAC JULIO BARRETO, 229')";

$resultado = mysqli_query($con, $sql);

if ($resultado) :
    echo 'Cliente gravado com sucesso!';
endif;


