<?php
$conn = connecta();

$res = mysqli_query($conn, 'SELECT * FROM cpagar');
?>

<div class="page-header">
    <h3>Orçamentos</h3>
</div>

<div class="row">
    <div class="panel panel-primary filterable">
        <div class="panel-heading">
            <h3 class="panel-title">Lista de Cobranças</h3>
            <div class="pull-right">
                <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtrar</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr class="filters">
                    <th><input type="text" class="form-control" placeholder="#" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Nome do Cliente" disabled></th>
                    <th><input type="text" class="form-control" placeholder="KWh Consumidos" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Tipo de Cliente" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Total" disabled></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($cob = mysqli_fetch_assoc($res)):?>
                <tr>
                    <td><?= $cob['id']; ?></td>
                    <td><?= $cob['nome']; ?></td>
                    <td><?= $cob['kwh']; ?></td>
                    <td><?= $cob['tipoconsumidor']; ?></td>
                    <td><?= cobrarPorTipo($cob['tipoconsumidor'], $cob['kwh']) ?></td>
                    <td></td>
                </tr>
                <?php endwhile; ?>
                

            </tbody>
        </table>
    </div>
    <a href="?pagina=criar">
        <button class="btn btn-primary">Nova Cobrança</button>
    </a>
</div>
