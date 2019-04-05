<?php
session_start();

if (!isset($_SESSION['captcha'])) {
    $n = mt_rand(1000, 9999);
    $_SESSION['captcha'] = $n;
}


$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($data) && $data['codigo']) {
    $captcha = $data['codigo'];

    if ($captcha == $_SESSION['captcha']) {
        echo "Acertou <br>";
    } else {
        echo "Errou <br>";
    }

    $n = mt_rand(1000, 9999);
    $_SESSION['captcha'] = $n;
}

?>

<img src="imagemCaptcha.php" width="100" height="50">

<br>
<br>

<form method="post">
    <input type="text" name="codigo">
    <input type="submit" value="Verificar">
</form>
