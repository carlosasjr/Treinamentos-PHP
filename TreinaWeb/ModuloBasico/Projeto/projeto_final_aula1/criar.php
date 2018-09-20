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
                        <li><a href="orcamentos.php">Orçamentos</a></li>
                        <li class="active"><a href="#">Criar</a></li>
                        <li><a href="#">Sobre</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">
            <div class="page-header">
                <h3>Criar</h3>
            </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-1">
                        <div class="well well-sm">
                            <form class="form-horizontal" action="" method="post">
                                <fieldset>
                                    <legend class="text-center">Criar Orçamento</legend>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name">Cliente</label>
                                        <div class="col-md-9">
                                            <input id="cliente" name="cliente" type="text" placeholder="Cliente" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="email">Total de horas</label>
                                        <div class="col-md-9">
                                            <input id="totaldehoras" name="totalhoras" type="number" placeholder="Total de horas" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="message">Valor/Hora</label>
                                        <div class="col-md-9">
                                            <input id="valorhora" name="valorhora" type="number" placeholder="Valor/Hora" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12 text-right">
                                            <button type="submit" class="btn btn-primary btn-lg">Gravar</button>
                                        </div>
                                    </div>
                                    <div class="alert alert-success" role="alert">
                                        <strong>Sucesso!</strong>
                                        Orçamento gravado com sucesso.
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
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