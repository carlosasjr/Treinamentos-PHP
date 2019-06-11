<!DOCTYPE html>
<?php
$vendas = array(10, 20, 30, 40, 20);
$custo = array(8, 15, 37, 90, 35);
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Title</title>

</head>
<body>
<div style="width: 500px">
    <canvas id="grafico">

    </canvas>
</div>


<script type="text/javascript" src="Chart.min.js"></script>
<script type="text/javascript">
    window.onload = function () {
        var contexto = document.getElementById("grafico").getContext("2d");
        var grafico = new Chart(contexto, {
            type: 'line',
            data: {
                labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio'],
                datasets: [{
                    label: 'Vendas',
                    backgroundColor: '#FF0000',
                    borderColor: '#FF0000',
                    data: [<?php echo implode(',', $vendas) ?>],
                    fill: false
                },

                    {
                        label: 'Custos',
                        backgroundColor: "#00FF00",
                        borderColor: '#00FF00',
                        data: [<?php echo implode(',', $custo) ?>],
                        fill: false
                    }
                ]
            }
        });
    }
</script>

</body>
</html>

