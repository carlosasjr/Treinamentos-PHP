<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 08/04/2019
 * Time: 14:57
 */

require 'config.php';

$sql = 'SELECT  * FROM filmes';
$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) {
    foreach ($sql->fetchAll() as $filme) :
        ?>

    <fieldset>
        <strong><?= $filme['titulo']; ?></strong><br>
        <a href="votar.php?id=<?php echo $filme['id'];?>&voto=1"><img src="star.png" height="20"></a>
        <a href="votar.php?id=<?php echo $filme['id'];?>&voto=2"><img src="star.png" height="20"></a>
        <a href="votar.php?id=<?php echo $filme['id'];?>&voto=3"><img src="star.png" height="20"></a>
        <a href="votar.php?id=<?php echo $filme['id'];?>&voto=4"><img src="star.png" height="20"></a>
        <a href="votar.php?id=<?php echo $filme['id'];?>&voto=5"><img src="star.png" height="20"></a>

        ( <?= round($filme['media'],2); ?> )
    </fieldset>

<?php

    endforeach;
} else {
    echo "Não há filmes cadastrados";
}

