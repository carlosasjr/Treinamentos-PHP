<?php
header("Content-Type: text/html; charset=utf-8"); // Informa ao navegador a codificação de caracteres UTF-8

$a = 30;
$b = 30;

if ($a == $b):
    echo 'A é igual a B';
elseif ($a <= $b):
    echo 'A é menor ou igual a B';
elseif ($a >= $b):
    echo "A é maior ou igual a B";
else :
    echo "entrou no else";
endif;

echo "<br>";
?>

<?php if ($a == $b): ?>
    <h1>A é igual a B</h1>

<?php elseif ($a <= $b): ?>
    <h1>A é menor igual a B</h1>

<?php else: ?>
    <h1>Entrou no Else</h1>
<?php endif; ?>




