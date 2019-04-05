<?php
require_once 'config.php';
require_once 'classes/Reservas.class.php';

use phpAvancado\Reservas;

$reservar = new Reservas($pdo);

$ano = filter_input(INPUT_GET, 'ano', FILTER_VALIDATE_INT);
$mes = filter_input(INPUT_GET, 'mes', FILTER_DEFAULT);


if (empty($ano) && empty($mes)) {
    exit;
}


$data = $ano . '-' . $mes;

// w = dia da semana
$dia1 = date('w', strtotime($data));

// t = qtd de dias tem no mês
$dias = date('t', strtotime($data));

//quantidade de linhas no calendário
$linhas = ceil(($dia1 + $dias) / 7);

$dia1 = -$dia1;
$data_inicio = date('Y-m-d', strtotime($dia1 . 'days', strtotime($data)));
$data_fim = date('Y-m-d', strtotime(($dia1 + ($linhas * 7) - 1) . 'days', strtotime($data)));


$lista = $reservar->getReservas($data_inicio, $data_fim);

?>

<br>
<div class="table-responsive">
    <table class="table table-sm table-bordered">
        <thead class="thead-light">
        <tr>
            <th>Domingo</th>
            <th>Segunda-Feira</th>
            <th>Terça-Feira</th>
            <th>Quarta-Feira</th>
            <th>Quinta-Feira</th>
            <th>Sexta-Feira</th>
            <th>Sabado</th>
        </tr>
        </thead>

        <tbody>
        <?php for ($l = 0;
                   $l < $linhas;
                   $l++) : ?>
            <tr>
                <?php for ($q = 0; $q < 7; $q++) : ?>
                    <?php
                    $w = date('Y-m-d', strtotime(($q + ($l * 7)) . 'days', strtotime($data_inicio)));

                    ?>
                    <td <?=($reservar->countReservas($w) > 0) ? 'class="bg-success text-white"' : '' ?>>
                        <?php
                        echo date('d', strtotime($w)) . "</br></br>";

                        $w = strtotime($w);

                        foreach ($lista as $item) {
                            $dr_inicio = strtotime($item['data_inicio']);
                            $dr_fim = strtotime($item['data_fim']);


                            if ($w >= $dr_inicio && $w <= $dr_fim) {
                                echo $item['pessoa'] . '(' . $item['id_carro'] . ')' . '<br>';
                            }
                        }
                        ?>
                    </td>
                <?php endfor; ?>
            </tr>

        <?php endfor; ?>

        </tbody>
    </table>
</div>

