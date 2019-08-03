<?php
// filter_var
// filter_input

/*
FILTER_VALIDATE_INT
FILTER_VALIDATE_BOOLEAN
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_URL
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_REGEX
FILTER_VALIDATE_IP

FILTER_SANITIZE_STRING *
FILTER_SANITIZE_ENCODED
FILTER_SANITIZE_SPECIAL_CHARS
 */


$email = 'carlos@hotmail.com.br';

if (filter_var($email, FILTER_VALIDATE_EMAIL )) {
    echo "e-mail válido";
} else {
    echo "não é um email";
}

echo "<hr>";


$numero = 10;

if (filter_var($numero, FILTER_VALIDATE_INT)) {
    echo "é um inteiro";
} else {
    echo "não é inteiro";
}

//transforma o html em texto
$html = "Este é meu <strong>nome</strong>";
$html = filter_var($html, FILTER_SANITIZE_SPECIAL_CHARS);

echo $html;

echo "<hr>";

$html = "Este é meu <strong>nome</strong>";
$html = strip_tags($html); //remove o html do texto
echo $html;

echo "<hr>";

//pegando dados via input

$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
echo $email;


$prioridade = filter_input(INPUT_POST, 'prioridade', FILTER_VALIDATE_INT, array('options' => array(
    'min_range' => 1,
    'max_range' => 4,
    'default' => 1
)));

echo "Prioridade " . $prioridade;

?>

<form method="post">
    <select name="prioridade" id="prioridade">
        <option value="1">Prioridade 1</option>
        <option value="2">Prioridade 2</option>
        <option value="3">Prioridade 3</option>
        <option value="4">Prioridade 4</option>
    </select>

    <input type="submit" value="Enviar">
</form>




