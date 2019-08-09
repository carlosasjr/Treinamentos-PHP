<?php
//utilizar o script a baixo com o crom jobs = agendador de tarefas do serviço web
//utilizar o mysqlDump para fazer o backup

//exec ("mysqldump ");

//local
//C:\wamp\bin\mysql\mysql5.7.14\bin\mysqldump

exec('C:\wamp\bin\mysql\mysql5.7.14\bin\mysqldump -u root carlo019_bontur > bontur.sql'); //usar -psenha se existir senha

$zip = new ZipArchive();
 if ($zip->open('bontur' . date('dmyHis')  . '.zip',ZipArchive::CREATE|ZipArchive::OVERWRITE) === true) {
     $zip->addFile('bontur.sql', 'bontur.sql');
     $zip->close();
 }





