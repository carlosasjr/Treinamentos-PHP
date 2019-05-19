<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Sorteio</title>

    <h1>Sorteio</h1>

    <?php
    if (file_exists('lista.txt')) {
        $lista = file('lista.txt');

        $round = rand(0, count($lista) -1);
        echo '<h2>' . $lista[$round] . '<h2>';

    }
    ?>
</head>
<body>

</body>
</html>

