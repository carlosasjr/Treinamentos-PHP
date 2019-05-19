<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>inverter String</title>
    <form method="post">
        <input type="text" name="frase" id="frase">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if (!empty($_POST['frase'])) {

        $p = $_POST['frase'];
        $array = array();

        for ($q = strlen($p) - 1; $q >= 0; $q--) {
            $array[] = $p[$q];
        }

        echo $p . "<br/>";
        echo implode('', $array);

    }


    ?>

</head>
<body>

</body>
</html>

