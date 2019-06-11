<?php
ob_start();
?>
<h1>Título do Relatório</h1>
<h4>Sub Título</h4>

<?php
$html = ob_get_contents();
ob_end_clean();


//usar o composer para baixar o mpdf
//composer require mpdf/mpdf

require 'vendor/autoload.php';

use Mpdf\Mpdf;

$mpdf = new mPDF();
$mpdf->WriteHTML($html);
//$mpdf->Output();//Abre o pdf

$mpdf->Output('arquivo.pdf', 'd');
//i = abre no browse  - padrão
//d = faz o download
//f = Salva no servidor

//documentacao
//https://mpdf.github.io/

?>


