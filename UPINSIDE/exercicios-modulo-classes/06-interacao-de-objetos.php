<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Interação de Objetos</title>
    </head>
    <body>
        <?php
        require('./class/InteracaoClasse.class.php');
        require('./class/IntercaoDeObjetos.class.php');
        
        $robson = new InteracaoClasse('CARLOS A. SANTOS JÚNIOR', 27, 'Programador', 1000);
        $marcos = new InteracaoClasse('Marcos', 22, 'Web Design', 500);
        
        $ = new IntercaoDeObjetos(' TECNOLOGIA');
        $->Contratar($robson, 'WebMaster', 3600);
        $->Pagar();
        $->Promover('Gerente de Projetos', 12000);
        $->Pagar();
        //$->Demitir(5600);
        
        
        $->Contratar($marcos, 'Design', 2200);
        $->Pagar();
        $->Pagar();
        $->Promover('Administrador de Projetos');
        
        $->Funcionarios($robson);
        $->Pagar();
        
        var_dump($robson, $marcos, $);
        ?>
    </body>
</html>
