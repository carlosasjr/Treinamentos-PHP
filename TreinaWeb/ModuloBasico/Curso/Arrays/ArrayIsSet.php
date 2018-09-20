<?php
//Verifica se o elemento existe

$a = array(1,'a',2, 'b' => 'c');

var_dump($a);
var_dump(isset($a)); // true - A variavel $a existe.
var_dump(isset($a[0])); // true - elemento 0 existe = 1
var_dump(isset($a[3])); // fase - elemento 3 não existe = que existe é o elemento 'b'
var_dump(isset($a['b'])); // true - elemento b  existe
var_dump(isset($a['c'])); // false - elemento c não existe = o que existe é o valor 'c'


