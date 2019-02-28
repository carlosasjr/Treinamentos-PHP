<?php
session_start();
require_once 'config.php';

if (isset($_SESSION['banco']) && !empty($_SESSION['banco'])) {
    $id = $_SESSION['banco'];

    $sql = 'SELECT * FROM contas WHERE id = :id';
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':id', $id, PDO::PARAM_INT);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $info = $sql->fetch();
    } else {
        header("Location: login.php");
        exit;
    }
} else {
    header("Location: login.php");
    exit;
}
?>


<html>
<head>
    <meta charset="UTF-8">
    <title>Caixa Eletrônico</title>
</head>
<body>
<h1>Banco XYZ</h1>
Titular: <?= $info['titular'] ?> <br>
Agência: <?= $info['agencia'] ?> <br>
Conta: <?= $info['conta'] ?> <br>
Saldo: <?= number_format($info['saldo'], 2, ',', '.') ?> <br>
<a href="sair.php">Sair</a>

<hr>

<h3>Movimentação / Extrato</h3>

<a href="add-transacao.php">Adicionar Transação</a>
<br>
<br>

<table border="1" width="400px">
    <tr>
        <th>Data</th>
        <th>Valor</th>
    </tr>

    <?php
    $sql = 'SELECT * FROM historico WHERE id_conta = :idconta';
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':idconta', $id, PDO::PARAM_INT);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        foreach ($sql->fetchAll() as $item) :
            ?>
            <tr>
                <td><?= date('d/m/Y H:i', strtotime($item['data_operacao'])) ?></td>
                <td>
                    <?php if ($item['tipo'] == '0'): ?>
                        <span style="color:green">R$ <?php echo $item['valor'] ?></span>
                    <?php else: ?>
                        <span style="color:red">- R$ <?php echo $item['valor'] ?></span>
                    <?php endif; ?>
                </td>
            </tr>
        <?php
        endforeach;
    }

    ?>


</table>


</body>
</html>


