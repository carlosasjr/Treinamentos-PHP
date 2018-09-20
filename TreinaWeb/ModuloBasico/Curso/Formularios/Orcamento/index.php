<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Orçamento 0.1</title>
    </head>
    <body>

        <?php
       /* if (isset($_POST['totalhoras']) && $_POST['valorhora']):
            echo 'Nome do Cliente: ' . $_POST['nomecliente'] . '<br>';
            echo 'Total de Horas: ' . $_POST['totalhoras'] . '<br>';
            echo 'Valor Hora: ' . $_POST['valorhora'] . '<br>';

            $total = $_POST['totalhoras'] * $_POST['valorhora'];

            echo "Total do projeto:" . number_format($total, 2, ',', '.');            
        endif;*/
        
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        
        if (isset($dados['submitFormOrcamento'])):
            echo 'Nome do Cliente: ' . $_POST['nomecliente'] . '<br>';
            echo 'Total de Horas: ' . $_POST['totalhoras'] . '<br>';
            echo 'Valor Hora: ' . $_POST['valorhora'] . '<br>';

            $total = $_POST['totalhoras'] * $_POST['valorhora'];

            echo "Total do projeto:" . number_format($total, 2, ',', '.');               
        endif;

        ?>        
        
        <form action="" method="POST">
            <p>Nome do Cliente:<input type="text" name="nomecliente" /></p>
            <p>Total Horas:<input type="text" name="totalhoras" /></p>
            <p>Valor Hora:<input type="text" name="valorhora" /></p>
            <input type="submit"  value="Calcular" name="submitFormOrcamento"/>
        </form>     


        <?php
       /* if (isset($_POST['totalhoras']) && $_POST['valorhora']):
            echo 'Nome do Cliente: ' . $_POST['nomecliente'] . '<br>';
            echo 'Total de Horas: ' . $_POST['totalhoras'] . '<br>';
            echo 'Valor Hora: ' . $_POST['valorhora'] . '<br>';

            $total = $_POST['totalhoras'] * $_POST['valorhora'];

            echo "Total do projeto:" . number_format($total, 2, ',', '.');            
        endif;*/
        
      /*  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        
        if (isset($dados['submitFormOrcamento'])):
            echo 'Nome do Cliente: ' . $_POST['nomecliente'] . '<br>';
            echo 'Total de Horas: ' . $_POST['totalhoras'] . '<br>';
            echo 'Valor Hora: ' . $_POST['valorhora'] . '<br>';

            $total = $_POST['totalhoras'] * $_POST['valorhora'];

            echo "Total do projeto:" . number_format($total, 2, ',', '.');               
        endif;*/

        ?>
    </body>
</html>
