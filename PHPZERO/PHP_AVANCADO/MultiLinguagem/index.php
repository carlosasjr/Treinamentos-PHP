<!DOCTYPE html>
<?php
session_start();

$lang = filter_input(INPUT_GET, 'lang', FILTER_DEFAULT);

if (!empty($lang)) {
    $_SESSION['lang'] = $lang;
}

require_once 'Language.class.php';

use PHP\Avancado\Language;

$lang = new Language();

?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>MultiLinguagem</title>
</head>
<body>

<a href="index.php?lang=en">English</a>
<a href="index.php?lang=pt-br">Português</a>

<hr>

<button><?php $lang->get('BUY') ?></button>
<button><?php $lang->get('CLOSE') ?></button>

<hr>

Linguagem Definida = <?= $lang->getLanguage() ?>

<br/>


<?php
$sql = "SELECT id, (select valor from lang where lang.lang = :lang and lang.nome = categorias.lang_item) as nome FROM categorias";
$sql = $pdo->prepare($sql);
$sql->bindValue(":lang", $lang->getLanguage());
$sql->execute();

if ($sql->rowCount() > 0) {
    foreach ($sql->fetchAll() as $categoria) {
        echo $categoria['nome'] . '<br/>';
    }
}

?>

</body>
</html>

