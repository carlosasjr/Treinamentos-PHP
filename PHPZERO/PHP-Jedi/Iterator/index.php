<?php

require 'classes.class.php';

$book1 = new Book("Livro Teste 1", "Carlos");
$book2 = new Book("Livro Teste 2 ", "Maria");
$book3 = new Book("Livro Teste 3 ", "José");

$bookList = new BookList();
$bookList->addBook($book1);
$bookList->addBook($book2);
$bookList->addBook($book3);



while ($bookList->valid()) {
    /** @var $book Book */
    $book = $bookList->current();

    echo $book->getTitle() . '<br>';

    $bookList->next();
}

echo $bookList->count();
