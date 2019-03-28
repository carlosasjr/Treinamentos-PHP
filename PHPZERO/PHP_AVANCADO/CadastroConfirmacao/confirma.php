<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 26/03/2019
 * Time: 15:53
 */

require_once 'config.php';

$h = filter_input(INPUT_GET,'h', FILTER_DEFAULT);

if (!empty($h)) {
    $sql = "UPDATE usuarios SET status = :status WHERE md5(id) = :h";
    $sql = $pdo->prepare($sql);

    $sql->bindValue(':status', 1, PDO::PARAM_INT);
    $sql->bindValue(':h', $h, PDO::PARAM_STR);

    $sql->execute();

    echo 'OK! Cadastro confirmado com sucesso...';
}
