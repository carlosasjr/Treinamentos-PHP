<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 08/03/2019
 * Time: 15:43
 */

$arquivo = "me.jpg";

$largura = 200;
$altura = 200;

list($largura_original, $altura_original) = getimagesize($arquivo);

$ratio = $largura_original / $altura_original;

if ($largura / $altura > $ratio) {
    $largura = $altura * $ratio;
} else {
    $altura = $largura / $ratio;
}

$imagem_final = imagecreatetruecolor($largura, $altura);
$imagem_original = imagecreatefromjpeg($arquivo);

imagecopyresampled(
    $imagem_final,
    $imagem_original,
    0,
    0,
    0,
    0,
    $largura,
    $altura,
    $largura_original,
    $largura_original
);

//header('Content-Type: image/jpeg');
imagejpeg($imagem_final, 'mecopy.jpg', 80);

echo 'Imagem copiada com sucesso';
