<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 01/03/2019
 * Time: 16:40
 */

try {
    $dsn = 'mysql:dbname=projeto_tags;host=localhost';
    $dbuser = 'root';
    $dbpass = '';
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'
    ];

    $pdo = new PDO($dsn, $dbuser, $dbpass, $options);

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
    exit;
}

$sql = "SELECT caracteristicas FROM usuarios";
$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll();

    $carac = array();

    foreach ($lista as $usuario) {
        $palavras = explode(",", $usuario['caracteristicas']);

        foreach ($palavras as $palavra) {
            $palavra = trim($palavra);

            if (isset($carac[$palavra])) {
                $carac[$palavra]++;
            } else {
                $carac[$palavra] = 1;
            }
        }
    }

    arsort($carac);

    $palavras = array_keys($carac);
    $contagens = array_values($carac);

    $maior = max($contagens);

    $tamanhos = [11,15,20,30];

    for ($x=0; $x < count($palavras); $x++) {
        $n = $contagens[$x] / $maior;

        $h = ceil($n * count($tamanhos));

        echo "<p style='font-size:" . $tamanhos[$h - 1] . "px" . "'>" . $palavras[$x] . " ($contagens[$x]) </p>";

    }


}

