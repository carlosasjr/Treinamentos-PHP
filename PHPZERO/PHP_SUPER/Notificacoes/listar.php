<?php
require 'config.php';

global $db;

$sql = "SELECT * FROM notificacoes WHERE id_user = 1 AND lido = 0";
$sql = $db->prepare($sql);
$sql->execute();


if ($sql->rowCount() > 0) {
    foreach ($sql->fetchAll() as $not) {
        $prop = json_decode($not['propriedades']);
        echo "<li class=\"list-group-item list-group-item-action\">{$not['notificacao_tipo']} - " . isset($prop->curtidor) . " - " .  isset($prop->id_foto) . "</li>";
    }
}

