<?php
header("Content-Type: text/html; charset=utf-8");

// Instancia a classe mysqli passando os dados de conexão
$db = new mysqli('localhost', 'root', '123', 'treinaweb');

// Define qual é a codificação de caracteres utilizada pela base
$db->set_charset('utf8');

//Verifica se houve algum erro durante a conexão
if ($db->connect_errno > 0):
    die('Ocorreu um erro durante a conexão [' . utf8_encode($db->connect_error) . ']');
endif;

$sql = 'SELECT id, nome, email FROM funcionario';
//Realiza a primeira consulta ao banco de dados


if (!$resultado = $db->query($sql)):
    die('Oppss. Ocorreu um erro durante a pesquisa. [' . utf8_encode($db->error) . ']');
endif;
?>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>E-mail</td>
    </tr>


    <?php
    //fetch_assoc = retorna um array associativo com chave e valor
    //fetch_object = retorna em forma de objeto, para acessar precisaria colocar $campo->nome
    while ($campo = $resultado->fetch_object()):
        ?>
        <tr>
            <td><?= $campo->id ?></td>
            <td><?= $campo->nome; ?></td>
            <td><?= $campo->email; ?></td>
        </tr>
    <?php endwhile; ?>
</table>

<?php
//Retorna o numero de registros do select
echo $resultado->num_rows;
?>
