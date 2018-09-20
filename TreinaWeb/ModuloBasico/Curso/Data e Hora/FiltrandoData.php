<?php

$datas = [
    '2018-08-7',
    '2018-08-25 10:07',
    '2018-08-25 10:20',
    '2018-08-27 10:30',
];

$inicial = '2018-08-25 10:00';
  $final = '2018-08-25 10:10';

foreach ($datas as $data):
    if ($data >= $inicial && $data <= $final):
        echo $data . "<br>";
    endif;     
endforeach;

