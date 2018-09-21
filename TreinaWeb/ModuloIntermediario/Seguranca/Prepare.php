<?php


$db = new mysqli('localhost', 'root', '123', 'treinaweb');
$db->set_charset('utf8');

if($db->connect_errno > 0) {
    die('Não foi possível realizar a conexão [' . $db->connect_error . ']');
}

if( ! isset($_GET['id'])) {
    die('Informe o ID do funcionario.');
}

// Obtêm o ID do funcionário.
$id = $_GET['id'];

// Prepara
$sql = 'SELECT id, nome, email FROM funcionario WHERE id = ?';
$stmt = $db->prepare($sql);

if($stmt === false) {
    die('Erro ao executar a consulta [' . $db->error . ']');
}

// Relaciona o valor ao argumento ? da Query.
// 'i' significa que é um inteiro
$stmt->bind_param('i', $id);

// Executa a consulta.
$stmt->execute();

// Define quais variáveis receberão os dados a cada fetch
$stmt->bind_result($id, $nome, $email);

?>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>E-mail</td>
    </tr>
    <?php while($stmt->fetch()): ?>
        <tr>
            <td><?=$id;?></td>
            <td><?=$nome;?></td>
            <td><?=$email;?></td>
        </tr>
    <?php endwhile ?>
</table>

