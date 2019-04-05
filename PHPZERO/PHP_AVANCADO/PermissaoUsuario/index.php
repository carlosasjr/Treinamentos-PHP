<?php
session_start();

require_once 'config.php';
require_once 'classes/Usuarios.class.php';
require_once 'classes/Documentos.class.php';

if (!isset($_SESSION['logado'])) {
    header('Location: login.php');
    exit;
}

$usuario = new Usuarios($pdo);
$usuario->setUsuario($_SESSION['logado']);

$documentos = new Documentos($pdo);
$lista = $documentos->getDocumentos();

?>

<h1>SISTEMA</h1>

<?php if ($usuario->temPermissao('ADD')) : ?>
    <a href="">Adicionar Documentos</a>
    <br>
    <br>
<?php endif; ?>

<?php if ($usuario->temPermissao('SECRET')) : ?>
    <a href="secreto.php">Página Secreta</a>
<?php endif; ?>


<table border="1" width="100%">
    <tr>
        <th>Nome do Arquivo</th>
        <th>Ações</th>
    </tr>


    <?php
    foreach ($lista as $item) :
        ?>
        <tr>
            <td><?php echo $item['titulo']; ?></td>
            <td>
                <?php if ($usuario->temPermissao('EDIT')) : ?>
                    <a href="">Editar</a>
                <?php endif; ?>

                <?php if ($usuario->temPermissao('DEL')) : ?>
                    <a href="">Excluir</a>
                <?php endif; ?>
            </td>
        </tr>
    <?php
    endforeach;
    ?>

</table>

<?php

?>


