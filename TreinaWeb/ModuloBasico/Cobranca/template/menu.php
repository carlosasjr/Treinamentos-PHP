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
                <li <?php echo active($get); ?> ><a href="index.php">Home</a></li>
                <li <?php echo active($get, 'cobranca'); ?>><a href="?pagina=cobranca">Cobranças</a></li>
                <li <?php echo active($get, 'criar'); ?>><a href="?pagina=criar">Criar</a></li>
                <li <?php echo active($get, 'sobre'); ?>><a href="?pagina=sobre">Sobre</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>