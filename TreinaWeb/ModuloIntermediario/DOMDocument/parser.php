<?php

$dom = new DOMDocument();

//abre o arquivo html
$dom->loadHTMLFile('treinaweb.html');

//Obtém o elemento de id igual a #titulo
$titulo = $dom->getElementById('titulo');

var_dump($titulo);


$titulos = $dom->getElementsByTagName('h2');


// Itera sobre os elementos encontrados
foreach ($titulos as $nome) {
    echo $nome->nodeValue;
    var_dump($nome);
}
// Imprime apenas o segundo título
var_dump($titulos->item(1)); 

var_dump( $titulos->length );

// Itera
$length = $titulos->length;

for( $i=0; $i<$length; $i++ ) {
    printf('%s <br>', $titulos->item($i)->nodeValue);
}

$i = 0;

while($titulo = $titulos->item($i++)) {
    // Imprime o texto do título
    printf('<h2>%s</h2>', $titulo->nodeValue);

    // Itera sobre os atributos
    foreach($titulo->attributes as $atributo) {
        // Escreve os nomes e valores dos atributos encontrados
        printf('<b>Nome:</b> %s <br> <b>Valor:</b> %s <br><br>', $atributo->name, $atributo->value );
    }
}

// Seleciona todos os elementos ul
$divs = $dom->getElementsByTagName('ul');








