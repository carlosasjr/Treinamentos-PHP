<?php
try {
    $options = [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    $pdo = new PDO("mysql:dbname=blog;host=localhost", 'root', '', $options);

} catch (PDOException $e) {
    echo 'Falhou: ' . $e->getMessage();
}


$regPorPagina = '15';
$totalRegistros = 0;

$sql = "SELECT count(*) AS TotalRegistros FROM posts";
$sql = $pdo->query($sql);
$sql = $sql->fetch();
$totalRegistros = $sql['TotalRegistros'];

$totalPaginas = $totalRegistros / $regPorPagina;

$pg = 1;
$paginaAtual = 1;
if (isset($_GET['p']) && !empty($_GET['p'])) {
    $paginaAtual = addslashes($_GET['p']);
}

$pg = ($paginaAtual - 1) * $regPorPagina;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Paginação</title>
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css">


</head>
<body>
<div class="container">
    <?php
    $sql = "SELECT * FROM posts LIMIT {$regPorPagina} OFFSET {$pg}";
    $sql = $pdo->query($sql);

    if ($sql->rowCount() > 0) {
        foreach ($sql->fetchAll() as $item) {
            echo $item['id'] . ' - ' . $item['titulo'] . '<br>';
        }
    }

    echo '<br>';

    echo '<ul class="pagination">';

    for ($q = 0; $q < $totalPaginas; $q++) {
        $active = (($q + 1) == $paginaAtual ? 'active' : '');

        echo '<li class="page-item ' . $active . '">' . '<a class="page-link" href="./?p=' . ($q + 1) . '">' . ($q + 1) . '</a></li>';
    }

    echo '</ul>'
    ?>

</div>

<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>

