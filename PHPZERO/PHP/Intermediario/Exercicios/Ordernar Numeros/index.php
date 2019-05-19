<h1>
    Ordernar Números
</h1>

<form method="post">
    <input type="text" name="valores" id="valores"><br><br>
    <input type="submit" value="Enviar">
</form>

<?php

 $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

 if ($dados) {
     $valores = $dados['valores'];

     $novo = explode(',', $valores);

    echo "<pre>";
    sort($novo);
     print_r($novo);

 }
?>


