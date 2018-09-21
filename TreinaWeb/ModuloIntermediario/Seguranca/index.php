<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($data['SendPostForm'])):
            unset($data['SendPostForm']); //remove a chave do submit

            var_dump($data);



            //echo $_POST['texto'] ;
            //FILTER_SANITIZE_STRING  = limpa(exclui) as tags da string
            //$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_STRING);
            //FILTER_SANITIZE_SPECIAL_CHARS = Transforma as tags em caracteres
            //$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_SPECIAL_CHARS);            
            //FILTER_SANITIZE_NUMBER_INT = Limpa a string e retorna só os numeros inteiros
            //$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_NUMBER_INT);            
            //FILTER_SANITIZE_NUMBER_FLOAT  = lima a string e retorno somente numero,podendo ser do tipo float
            //FILTER_FLAG_ALLOW_FRACTION = acrescentar a flag para permitir . 
            //$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

            $texto = $_POST['texto'];

            //valida se é um numero float valido, passado o separador de milhar
            /* $float = ['decimal' => ','];
              if (isset($texto) && (filter_var($texto, FILTER_VALIDATE_FLOAT, ['options' => $float]))):
              echo $texto;
              else :
              echo 'Não é um numero decimal valido';
              endif; */


            //validar se um numero inteiro esta dentro de uma faixa 

            $faixa = ['min_range' => 0,
                'max_range' => 100];
            
             if (isset($texto) && (filter_var($texto,FILTER_VALIDATE_INT, ['options' => $faixa]))):
              echo $texto;
              else :
              echo 'Não é um numero inteiro valido na faixa de 0 a 100';
              endif; 

        endif;
        ?>
        <br>

        <form method="POST">
            TEXTO: <input type="text" value="" name="texto" />  
            <input type="submit" value="Enviar" name="SendPostForm" /> 
        </form>
    </body>
</html>
