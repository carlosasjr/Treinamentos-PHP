<?php
include_once './PROJETO/Config.inc.php';   
     

$clientes = ['nome' => 'Carlos Antonio dos Santos Junior'];

//cria uma instrução de INSERT
$sql = new TSQLInsert('famosos', $clientes);
$sql->Execute();

$sql->Result;





//troca o nome da entidade
//$sql->setEntity('clientes');








