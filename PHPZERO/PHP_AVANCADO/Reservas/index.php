<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Reservar</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
      function calendario() {
          var ano = $("#ano").val();
          var mes = $("#mes").val();
          $.get("calendario.php", {ano: ano, mes: mes}, function( data ) {

              $("#cal").html( data );
          });

          return false;
      }
    </script>
</head>
<body>
<div class="container">

    <h1>Reservas</h1>

    <button data-toggle="modal" data-target="#janelaReserva">Adicionar Reservar</button>
    <br>
    <br>

    <form method="get" onsubmit="return calendario()">
        <div class="form-row">
            <div class="col-3 col-sm-1">
                <div class="form-group">
                    <select class="form-control" name="ano" id="ano">
                        <?php for ($q = date('Y'); $q >= 2000; $q--) : ?>
                            <option><?= $q ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
            </div>

            <div class="col-3 col-sm-1">
                <div class="form-group">
                    <select class="form-control" name="mes" id="mes">
                        <option>01</option>
                        <option>02</option>
                        <option>03</option>
                        <option>04</option>
                        <option>05</option>
                        <option>06</option>
                        <option>07</option>
                        <option>08</option>
                        <option>09</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                    </select>
                </div>
            </div>

            <div class="col-3 col-sm-1">
                <div class="form-group">
                    <input class="btn btn-danger form-control" type="submit" value="Filtrar">
                </div>
            </div>
        </div>
    </form>

    <div id="cal"></div>

</div>

</body>
</html>

