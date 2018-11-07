<?php

//Inicia a sessão
session_start();

//Verifica se o formulário foi postado
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!empty($dados['formLogin'])) :
    var_dump($dados)  ;
    
//Os dados de login conferem?
    if ($dados['email'] === 'teste@site.com.br' && $dados['senha'] === '123'):
        // Cria uma sessão que indentifica se o usuário efetuou o login
        $_SESSION['logado'] = true;
    
        // Armazena na sessão o e-mail do usuário logado
        $_SESSION['email'] = $_POST['email'];
        
        
        // Redireciona o usuário para a página "segura"
       // header('Location: seguro.php');         
        
       // var_dump($_SESSION);
    endif;   
endif;

?>

<!DOCTYPE HTML>
<html>
     <head>
        <title>Login</title>
        <meta charset="UTF-8" />
    </head>  
    <body>
        <form action ='login.php' method="post">
            <p>
                <label for="email">E-mail:</label>
                <input type="text" id='email' name='email' />
            </p>
            
           <p>
                <label for="senha">Senha:</label>
                <input type="password" id='senha' name='senha' />
            </p>            
            <input type="submit" name="formLogin" value='Entrar'/>
        </form> 
    </body>        
</html>

