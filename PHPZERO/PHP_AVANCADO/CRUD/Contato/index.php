<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 17/03/2019
 * Time: 11:16
 */

require_once 'Contato.class.php';

use CRUD\Contato;

$contato = new Contato();

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados) && $dados['btnFormSalvar']) {
    unset($dados['btnFormSalvar']);


    if (!empty($dados['id'])) {
        $contato->editar($dados['id'], $dados['nome'], $dados['email']);
    } else {
        $contato->adicionar($dados['email'], $dados['nome']);
    }

    header('Location: index.php');
}

$delete = filter_input(INPUT_GET, 'deletar', FILTER_VALIDATE_INT);

if ($delete) {
    $contato->excluir($delete);
    header('Location: index.php');
}

$action = filter_input(INPUT_GET, 'action', FILTER_DEFAULT);
$editarID = filter_input(INPUT_GET, 'editar', FILTER_VALIDATE_INT);

if (($action == 'editar') && ($editarID)) {
    $data = $contato->getID($editarID);

    if (empty($data)) {
        header('Location: index.php');
    }

}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Lista de Contatos</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css" type="text/css">
</head>
<body>


<div class="container">
    <h1>Contatos</h1>
    <br>
    <button id="adicionar" class="btn btn-primary" data-toggle="modal" data-target="#addEditar">Adicionar</button>

    <div id="addEditar" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="lblAdd">Contato:</h5>
                    <button class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>

                <div class="modal-body">
                    <form method="post" class="j_formsubmit">
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="hidden" value="<?php if (isset($data['id'])) {
                                        echo $data['id'];
                                    } ?>" id="id" name="id" class="form-control" autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="nome">Nome</label>
                                    <input type="text" value="<?php if (isset($data['nome'])) {
                                        echo $data['nome'];
                                    } ?>" id="nome" name="nome" class="form-control" autofocus>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" value="<?php if (isset($data['email'])) {
                                        echo $data['email'];
                                    }; ?>" id="email" name="email" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <input type="submit" value="Salvar" name="btnFormSalvar" class="noclear btn btn-danger">
                            <button class="btn btn-dark" data-dismiss="modal">Fechar</button>
                        </div>
                    </form>
                </div>


            </div> <!-- content -->
        </div> <!-- dialog -->
    </div> <!-- modal -->


    <br>
    <br>

    <div class="table-responsive">
        <table class="table table-striped table-hover table-sm" width="500">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
            </thead>

            <tbody>
            <?php
            $lista = $contato->getAll();

            foreach ($lista as $item) :
                ?>

                <tr>
                    <td><?= $item['id']; ?></td>
                    <td><?= $item['nome']; ?></td>
                    <td><?= $item['email']; ?></td>
                    <td><a class="btn btn-dark" href="index.php?action=editar&editar=<?= $item['id']; ?>">Editar</a>

                        <a class="btn btn-danger" href="index.php?deletar=<?= $item['id']; ?>">Excluir</a></td>
                </tr>

            <?php
            endforeach;
            ?>
            </tbody>
        </table>
    </div>
</div>


<script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../../js/bootstrap.bundle.min.js"></script>

<script type="text/javascript">

    var btnAdicionar = document.getElementById('adicionar');

    btnAdicionar.onclick = function () {
        $('.j_formsubmit').find('input[class!="noclear btn btn-danger"]').val('');
    }

</script>

<?php

if (isset($action) && ($action == 'editar') && ($editarID)) {
    echo "<script>$('#addEditar').modal('show');</script>";
}


?>


</body>
</html>

