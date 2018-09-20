<?php

echo 'Nome do Cliente: ' . $_POST['nomecliente'] . '<br>';
echo 'Total de Horas: ' . $_POST['totalhoras'] . '<br>';
echo 'Valor Hora: ' . $_POST['valorhora'] . '<br>';

$total = $_POST['totalhoras'] * $_POST['valorhora'];

echo "Total do projeto:" . number_format($total,2,',','.') ;

