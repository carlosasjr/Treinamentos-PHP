<?php
$conn = connecta();

$res = mysqli_query($conn, 'SELECT * FROM tbl_orcamentos');
?>

<div class="page-header">
    <h3>Orçamentos</h3>
</div>

<div class="row">
    <div class="panel panel-primary filterable">
        <div class="panel-heading">
            <h3 class="panel-title">Lista de Orçamentos</h3>
            <div class="pull-right">
                <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filtrar</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr class="filters">
                    <th><input type="text" class="form-control" placeholder="#" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Nome do Cliente" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Total de Horas" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Valor Hora" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Total" disabled></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($orc = mysqli_fetch_assoc($res)):?>
                <tr>
                    <td><?= $orc['id']; ?></td>
                    <td><?= $orc['cliente']; ?></td>
                    <td><?= $orc['totalhoras']; ?> horas</td>
                    <td><?= formatReais($orc['valorhora']); ?></td>
                    <td><?= formatReais($orc['totalhoras'] * $orc['valorhora']); ?></td>
                    <td></td>
                </tr>
                <?php endwhile; ?>
                

            </tbody>
        </table>
    </div>
    <a href="?pagina=criar">
        <button class="btn btn-primary">Novo Orçamento</button>
    </a>
</div>
