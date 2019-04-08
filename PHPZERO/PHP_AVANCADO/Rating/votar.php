<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 08/04/2019
 * Time: 15:15
 */

require 'config.php';

$idFilme = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$voto = filter_input(INPUT_GET, 'voto', FILTER_VALIDATE_INT);

if (!empty($idFilme) && !empty($voto)) {
    if ($voto >= 1 && $voto <= 5) {
        $sql = 'INSERT INTO votos SET id_filme = :id_filme, nota = :nota';
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':id_filme', $idFilme);
        $sql->bindValue(':nota', $voto);
        $sql->execute();
    }

    $sql = 'UPDATE filmes SET media = (SELECT (SUM(nota) / COUNT(*)) FROM votos WHERE votos.id_filme = filmes.id) WHERE id = :id';
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':id', $idFilme);
    $sql->execute();

    header("Location: index.php");
    exit;
}
