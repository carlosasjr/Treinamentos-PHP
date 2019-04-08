<?php
require 'config.php';
$ip = $_SERVER['REMOTE_ADDR'];
$hora = date('H:i:s');

//insere o acesso
$sql = 'INSERT INTO acessos SET ip =:ip, hora = :hora';
$sql = $pdo->prepare($sql);
$sql->bindValue(':ip', $ip);
$sql->bindValue(':hora', $hora);
$sql->execute();

//delete os acessos de 5minutos passados
$sql = $pdo->prepare('DELETE FROM acessos WHERE hora < :hora');
$sql->bindValue('hora', date('H:i:s', strtotime('-5 minutes')));
$sql->execute();

//busca o total de acessos nos 5 minutos
$sql = 'SELECT ip FROM acessos WHERE hora > :hora GROUP BY ip';
$sql = $pdo->prepare($sql);
$sql->bindValue(':hora', date('H:i:s', strtotime('-5 minutes')));
$sql->execute();
$contagem = $sql->rowCount();

echo 'ONLINE = ' . $contagem;


