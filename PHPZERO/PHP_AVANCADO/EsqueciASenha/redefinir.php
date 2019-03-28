<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 27/03/2019
 * Time: 10:31
 */

require_once 'config.php';

$token = filter_input(INPUT_GET, 'token', FILTER_DEFAULT);

if (!empty($token)) {

    $sql = "SELECT * FROM usuarios_token WHERE hash = :hash AND used = 0 AND expirado_em > NOW()";

    $sql = $pdo->prepare($sql);
    $sql->bindValue(':hash', $token);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $sql = $sql->fetch();
        $id = $sql['id_usuario'];

        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($dados) && $dados['senha']) {
            $senha = md5($dados['senha']);

            $sql = "UPDATE usuarios SET senha = :senha WHERE id = :id";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(':senha', $senha);
            $sql->bindValue(':id', $id);
            $sql->execute();


            $sql = "UPDATE usuarios_token SET used = 1 WHERE hash = :hash";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(':hash', $token);
            $sql->execute();

            echo "Senha alterada com sucesso";
        }



        ?>

         <form method="post">
             Digite a nova senha: <br>
             <input type="password" name="senha"><br>

             <input type="submit" value="Alterar Senha">
         </form>


        <?php
    } else {
        echo "Token já utilizado";
    }

}
?>

