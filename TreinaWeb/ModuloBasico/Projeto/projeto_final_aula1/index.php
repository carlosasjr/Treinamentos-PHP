<?php

$get = isset($_GET['pagina'])? $_GET['pagina']:'';

require 'lib/funcs.php';
require 'template/header.php';
require 'template/menu.php';
?>
<div class="container">
<?php
rotas($get);
?>
</div> <!-- /container -->
<?php
require 'template/footer.php';
?>   