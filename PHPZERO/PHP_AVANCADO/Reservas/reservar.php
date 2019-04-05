<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 01/04/2019
 * Time: 12:57
 */

require_once 'config.php';
require_once 'classes/Carros.class.php';
require_once 'classes/Reservas.class.php';

use phpAvancado\Carros;
use phpAvancado\Reservas;

$carros = new Carros($pdo);
$reservas = new Reservas($pdo);

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados) && $dados['FormReserva']) {
    unset($dados['FormReserva']);

    $carro = $dados['carro'];
    $data_inicio = Reservas::converterDate($dados['data_inicio']);
    $data_fim = Reservas::converterDate($dados['data_fim']);


    if ($reservas->verificarDisponibilidade($carro, $data_inicio, $data_fim)) {
        $reservas->reservar($dados);
        header("Location: index.php");
        exit;
    } else {
        echo "Este carro já está reservado!";
    }


}

?>


<div id="janelaReserva" class="modal fade">

    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pesquisa</h5>
                <button class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <h2>Itens do cadastro</h2>
                <form method="post">
                    Carro:<br>
                    <select name="carro">
                        <?php
                        $lista = $carros->getCarros();

                        foreach ($lista as $carro) : ?>
                            <option value="<?= $carro['id'] ?>"><?= $carro['nome']; ?></option>
                        <?php
                        endforeach;
                        ?>
                    </select>

                    <br>
                    <br>

                    Data de Início:<br>
                    <input type="text" name="data_inicio">
                    <br>
                    <br>

                    Data de Fim:<br>
                    <input type="text" name="data_fim">
                    <br>
                    <br>

                    Nome:<br>
                    <input type="text" name="nome">

                    <br>
                    <br>

                    <input type="submit" name="FormReserva" value="Reservar">
                </form>
            </div>
        </div>
    </div>

</div>
</div>