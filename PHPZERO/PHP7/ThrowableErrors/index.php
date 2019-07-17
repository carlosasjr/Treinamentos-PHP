<?php

//tratar erros de forma geral e erros de sintaxe

 try {
     dfasdfasd(); //função que não existe

 } catch (Throwable $e) {
     echo "<b>Erro:</b><br>";
     echo "Arquivo: " . $e->getFile() . '<br>';
     echo "Linha: " . $e->getLine() . '<br>';
     echo "Código: " . $e->getCode() . '<br>';
     echo "Mensagem: " . $e->getMessage() . '<br>';
 }

 echo "O código continua..";
