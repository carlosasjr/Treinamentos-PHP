<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TreinaWeb - Orçamento</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">

        <!-- Navbar Fixed -->
        <link href="css/navbar-fixed.css" rel="stylesheet">
        
        <!-- Estilo das tabelas -->
        <link href="css/table.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Navegação</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="treinaweb-index.png"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="#">Orçamentos</a></li>
                        <li><a href="criar.php">Criar</a></li>
                        <li><a href="#">Sobre</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">
            <div class="page-header">
                <h3>Orçamentos</h3>
            </div>
            <div class="row">
                <div class="panel panel-primary filterable">
                    <div class="panel-heading">
                        <h3 class="panel-title">Lista de Orçamentos</h3>
                        <div class="pull-right">
                            <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
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
                            <tr>
                                <td>1</td>
                                <td>Cliente 1</td>
                                <td>200 horas</td>
                                <td>R$ 5,00</td>
                                <td>R$ 1.000,00</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Cliente 2</td>
                                <td>100 horas</td>
                                <td>R$ 5,00</td>
                                <td>R$ 4.230,00</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Cliente 3</td>
                                <td>200 horas</td>
                                <td>R$ 35,00</td>
                                <td>R$ 2.500,00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="criar.php">
                    <button class="btn btn-primary">Novo Orçamento</button>
                </a>
            </div>
        </div> <!-- /container -->

        <div class="navbar navbar-default navbar-fixed-bottom">
            <div class="container">
                <p class="navbar-text pull-left">© <?= date("Y"); ?>
                    <a href="http://www.treinaweb.com.br" target="_blank" >TreinaWeb Cursos</a>
                </p>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/table.js"></script>
    </body>
</html>