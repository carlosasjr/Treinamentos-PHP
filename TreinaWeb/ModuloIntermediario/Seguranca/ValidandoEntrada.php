<?php

//Teste que verifica se foi informado um id, senão passa null
$id = isset($_GET['id']) ? isset($_GET['id']) : null;

//teste para verificar se o id é do tipo numérico.
if (!is_numeric($id)):
    die ("Informe um id válido.");
endif;

echo "SELECT * FROM funcionarios WHERE id={$id}";
