<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Substituir Palavras</title>
</head>
<body>

    <h1>Substituir Palavras</h1>

    <form method="post">
        Frase: <input type="text" name="frase"><br><br>
        Localizar: <input type="text" name="localizar"><br> <br>
        Substituir: <input type="text" name="substituir"><br><br>
        <input type="submit" value="Substituir">
    </form>

    <?php
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if ($dados) {
            $frase = $dados['frase'];
            $localizar  = $dados['localizar'];
            $substituir = $dados['substituir'];

            echo 'Frase:' . $frase . "<br>";
            echo 'Nova Frase:' . str_replace($localizar, $substituir, $frase ). "<br>";
        }
    ?>


</body>
</html>

