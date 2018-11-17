<?php
   setlocale(LC_NUMERIC, 'POSIX')  ;

   function __autoLoad($classe){
       include_once  "./class/{$classe}.class.php";
   }
