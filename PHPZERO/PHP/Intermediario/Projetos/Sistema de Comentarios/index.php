<?php
try {
    $dsn = 'mysql:dbname=projeto_comentarios;host=localhost';
    $dbuser = 'root';
    $dbpass = '';
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'
    ];

    $pdo = new PDO($dsn, $dbuser, $dbpass, $options);

} catch (PDOException $e) {
    echo "ERRO: " . $e->getMessage();
}

function formataData($Data)
{
    $Format = explode(' ', $Data);
    $Data = explode('-', $Format[0]);

    if (empty($Format[1])) :
        $Format[1] = date('H:i:s');
    endif;


    $Data = $Data[2] . '/' . $Data[1] . '/' . $Data[0] . ' ' . $Format[1];
    return $Data;
}

$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if (!empty($data)) {
    $nome = $data['nome'];
    $mensagem = $data['msg'];

    $sql = $pdo->prepare("INSERT INTO mensagens (nome, msg, data_msg) VALUES (:nome, :msg, NOW())");

    $sql->bindValue(':nome', $nome, PDO::PARAM_STR);
    $sql->bindValue(':msg', $mensagem, PDO::PARAM_STR);

    $sql->execute();

    header('Location: index.php');
}

?>

    <fieldset>
        <form method="post">
            Nome: <br>
            <input type="text" name="nome"><br><br>

            Mensagem: <br>
            <textarea name="msg"></textarea><br><br>

            <input type="submit" value="Enviar Mensagem">
        </form>
    </fieldset>
    <br>

<?php
$sql = "SELECT * FROM mensagens ORDER BY data_msg DESC ";
$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) {
    foreach ($sql->fetchAll() as $mensagem) :
        ?>
        <br>
        <strong><?php echo formataData($mensagem['data_msg']);
            echo '<br>';
            echo $mensagem['nome']; ?></strong><br>
        <?= $mensagem['msg']; ?>
        <hr>

    <?php
    endforeach;
} else {
    echo "Não há mensagens.";
}
?>