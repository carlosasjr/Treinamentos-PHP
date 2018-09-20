<?php
$nome = 'Carlos';

$heredoc=<<<TEXTO
Meu texto dentro de um here doc. O here doc aceita "'" e substitui as variaveis php
$nome
TEXTO;

echo  $heredoc;

echo '<br>';

$nowdoc = <<<'TEXTO'
Meu texto dentro de um now doc. O now doc aceita "'" e não substitui as variaveis php
$nome
TEXTO;

echo  $nowdoc;

