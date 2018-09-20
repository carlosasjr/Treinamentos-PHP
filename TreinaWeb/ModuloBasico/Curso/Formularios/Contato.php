<!DOCTYPE html>
<?php 
 $cursos = ["PHP", "CSS", "JavaScript", "HTML5", "jQuery", "MySQL"]
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP Básico - TreinaWeb Cursos</title>
    </head>
    <body>
        <?php
       /*  $data = filter_input_array(INPUT_GET, FILTER_DEFAULT); 
         
         if (!empty($data['submitForm'])):
             unset($data['submitForm']);
             var_dump($data);
         endif; */              
        ?>
        
        <form action="processaContato.php" method="POST">
            <fieldset>
                <legend>Informações Pessoais</legend>
                <?php foreach ($cursos as $indice => $curso): ?>
                    <p>
                        <input type="checkbox" name="cursos[]" id="c<?= $indice; ?>" value="<?= $curso; ?>" />
                        <label for="c<?= $indice; ?>" ><?= $curso ?></label>
                    </p>
                <?php endforeach; ?>             
                
                <p><input type="submit" value="Enviar" name="submitForm" /> </p>
            </fieldset>   
        </form>
    </body>
</html>
