<?php
/**
 * Robo para monitorar sites e resultados
 */

require 'simple_html_dom.php';

$html = file_get_html('https://www.youtube.com/results?search_query=php');

$result = $html->find('.yt-lockup');

echo 'Total de resultados ' . count($result);


foreach ($result as $video) {
    $imagem = $video->find('.yt-thumb-simple img', 0)->attr['src'];
   // $tempo = $video->find('.video-time', 0)->plaintext;
    $link = $video->find('.yt-lockup-title a', 0)->href;
    $titulo = $video->find('.yt-lockup-title a', 0)->plaintext;

    //echo 'Image: ' . $imagem .'<br>';

   // echo 'Tempo: ' . $tempo .'<br>';
    echo "<img src=" . $imagem . '>';
    echo 'Link: https:/www.youtube.com.br' . $link .'<br>';
    echo 'Titulo: ' . $titulo .'<br>';
    echo '<hr>';
}

