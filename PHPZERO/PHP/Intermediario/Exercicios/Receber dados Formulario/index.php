<!DOCTYPE html>
<?php
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    
    
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Recebendo dados do Formulário</title>
</head>
<body>

    <form method="post">
       <label>Qual é o seu nome?</label><br>
        <input type="text" name="nome" id="nome">
        <br>
        <input type="submit" value="Enviar">         
    </form>


        <?php
          if (!empty($nome)) {
              echo "<h1>{$nome}</h1>";
          }
        ?>


</body>
</html>

