<!DOCTYPE html>
<?php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if ($dados) {
    $vProduto = $dados['valor'];
    $taxa = $dados['taxa'];

    $imposto = ($vProduto * $taxa) / 100;
    $vProdutoBruto = $vProduto - $imposto;
}
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Calculadora de Impostos</title>
</head>
<body>
<h1>Calculadora de Imposto</h1>
<form method="post">
    <label>Valor do Produto</label><br>
    <input type="text" name="valor" id="valor"><br>

    <label>Taxa de imposto (em %)</label><br>
    <input type="text" name="taxa" id="taxa">
    <br>
    <br>

    <input type="submit" value="Calcular">
</form>

<p>Valor do Produto: <?php if (isset($vProduto)) {
        echo $vProduto;
    } ?></p>
<p>Taxa de Imposto: <?php if (isset($taxa)) {
        echo $taxa;
    } ?> %</p>
<hr>
<p>Taxa de Imposto: <?php if (isset($imposto)) {
        echo $imposto;
    } ?></p>
<p>Taxa de Imposto: <?php if (isset($vProdutoBruto)) {
        echo $vProdutoBruto;
    } ?></p>


</body>
</html>

