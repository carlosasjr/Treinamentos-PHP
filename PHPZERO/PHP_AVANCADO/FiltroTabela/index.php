<?php
require_once 'config.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (isset($dados) && $dados['sexo'] != '') {
    $sexo = $dados['sexo'];

    $sql = 'SELECT * FROM usuarios WHERE sexo = :sexo';
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':sexo', $sexo);
    $sql->execute();
} else {
    $sexo = '';
    $sql = 'SELECT * FROM usuarios';
    $sql = $pdo->prepare($sql);
    $sql->execute();
}


?>

<form method="post">
    <select name="sexo">
        <option value="" <?php echo ($sexo == '') ? 'selected=selected' : ''; ?>>Todos</option>
        <option value="0" <?php echo ($sexo == '0') ? 'selected=selected' : ''; ?>>Masculino</option>
        <option value="1" <?php echo ($sexo == '1') ? 'selected=selected' : ''; ?>>Feminino</option>
    </select>

    <input type="submit" value="Filtrar">

</form>

<table border=1 width="100%">
    <tr>
        <th>Nome</th>
        <th>Sexo</th>
        <th>Idade</th>
    </tr>

    <?php
    if ($sql->rowCount() > 0) :
        foreach ($sql->fetchAll() as $usuario) :
            ?>

            <tr>
                <td><?= $usuario['nome']; ?></td>
                <td><?= $usuario['sexo'] == 0 ? 'Masculino' : 'Feminino'; ?></td>
                <td><?= $usuario['idade']; ?></td>
            </tr>

        <?php
        endforeach;
    endif;

    ?>
</table>
