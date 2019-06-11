<?php
require 'config.php';

global $db;

$prop = array(
    'curtidor' => '2',
    'id_foto' => '123'
);

$sql = "INSERT INTO notificacoes (id_user, notificacao_tipo, propriedades, link) VALUES (:id_user, :tipo, :prop, :link)";

$sql = $db->prepare($sql);
$sql->bindValue(':id_user', '1');
$sql->bindValue(':tipo', 'CURTIDA');
$sql->bindValue(':prop', json_encode($prop));
$sql->bindValue(':link', 'seulink.com.br');
$sql->execute();

