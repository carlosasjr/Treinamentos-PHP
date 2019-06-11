<?php
require 'config.php';

global $db;

$sql = "SELECT * FROM notificacoes WHERE id_user = 1 AND lido = 0";
$sql = $db->prepare($sql);
$sql->execute();

$array = array('qt' => 0);
if ($sql->rowCount() > 0) {
    $array['qt'] = $sql->rowCount();
}

echo json_encode($array);
exit;

