<?php

// Abre o documento XML e retorna um objeto de sua estrutura parseada (analisada)
$livraria = simplexml_load_file('livros.xml');

// Imprime os livros
foreach($livraria->livro as $livro) {
    echo 'Linguagem: '    . $livro->attributes()[0] . '<br>';
    // ou  echo 'Linguagem: '    . $livro->attributes()['lang'] . '<br>'; 
    echo 'Moeda: ' . $livro->valor->attributes()[0] . '<br>';
    // ou  echo $livro->valor->attributes()['moeda'] . '<br>';
    
    printf('Título: %s <br> Valor: %s <br><br>', $livro->titulo, $livro->valor);
    
}
