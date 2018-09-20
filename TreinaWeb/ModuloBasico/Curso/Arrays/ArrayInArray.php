<?php

//Localizar valor no array

$a = array(1, 'a', 2, 'b' => 'c', 'd' => NULL);

var_dump(in_array('1', $a));  //true
var_dump(in_array('a', $a));  //true
var_dump(in_array('b', $a));  //false
var_dump(in_array('c', $a));  //true
var_dump(in_array('d', $a));  //false
var_dump(in_array(NULL, $a)); //true


$b = [0 => [0 => 'a', 1 => 'b', 'c'],
      1 => [0 => 'd', 1 => 'e', 'f']    
    ];

    var_dump(in_array('a', $b[1]));
