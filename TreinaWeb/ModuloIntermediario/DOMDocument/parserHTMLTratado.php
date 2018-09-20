<?php
$dom = new DOMDocument();


// Obtém o conteúdo do arquivo
$html = file_get_contents('treinaweb.html');

// Remove os espaços em branco e quebras entre as tags
$html = preg_replace("/>\s+</", "><", $html);

/// Carrega o HTML tratado
$dom->loadHTML($html);

$divs = $dom->getElementsByTagName('ul');

echo $divs->item(0)->childNodes->length;

var_dump($dom);