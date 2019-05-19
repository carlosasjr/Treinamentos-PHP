<!DOCTYPE html>
<?php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if ($dados) {
    $valores = $dados['valores'];

    $arr = [
        'zero' => '0',
        'um' => '1',
        'dois' => '2',
        'tres' => '3'
    ];


    $fields = explode(',', $valores);


}
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Palavra em Dígito</title>
</head>
<body>
<h1>Conversor Palavra em Dígito</h1>
<form method="post">
    <input type="text" name="valores" id="valores">
    <input type="submit" value="Enviar">
</form>

<?php

echo $valores . '<br>';

foreach ($fields as $field) {
    if (isset($arr[$field])) {
        {
            echo $arr[$field] . ' ';
        }
    }
}

?>

</body>
</html>

