<h1>Digite o e-amil ou CPF</h1>

<form method="get">
    <input type="text" name="campo">
    <input type="submit" value="Pesquisar">
</form>

<hr>

<?php
$campo = filter_input(INPUT_GET, 'campo', FILTER_DEFAULT);


if (!empty($campo)) {

    require_once 'config.php';

    $sql = 'SELECT * FROM usuarios WHERE (email = :email OR cpf = :cpf OR nome LIKE :nome)';
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':email', $campo);
    $sql->bindValue(':cpf', $campo);
    $sql->bindValue(':nome', '%' . $campo . '%');
    $sql->execute();

    if ($sql->rowCount() > 0) {
        foreach ($sql->fetchAll() as $usuario) {
            echo $usuario['nome'] . ' - ' . $usuario['email'] . '<br>';
        }
    }
}

?>


