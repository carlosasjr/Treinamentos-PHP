<?php
header("Content-Type: text/html; charset=utf-8");
?>

<div class="page-header">
    <h3>Criar</h3>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-1">
        <div class="well well-sm">
            <form class="form-horizontal" action="gravaCobranca.php" method="post" novalidate>
                <fieldset>
                    <legend class="text-center">Criar Cobranca</legend>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Cliente</label>
                        <div class="col-md-9">
                            <input id="cliente" name="cliente" type="text" placeholder="Cliente" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="email">Total de KWh</label>
                        <div class="col-md-9">
                            <input id="totalkwh" name="totalkwh" type="number" placeholder="Total de Kwh" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="message">Tipo do Consumidor</label>
                        <div class="col-md-9">                                                    
                            <select name ="tipoconsumidor" class="form-control" required>
                                <option value="null" disabled="disabled" selected="selected">Selecione o Tipo: </option>                                
                                <option value="Residencial">Residencial</option>                                
                                <option value="Industria">Industria</option>                                
                                <option value="Comercial">Comercial</option>                                
                            </select>
                        </div>
                        
                        
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary btn-lg">Gravar</button>
                        </div>
                    </div>

                    <?php if (isset($_GET['sucesso'])): ?>
                        <div class="alert alert-success" role="alert">
                            <strong>Sucesso!</strong>
                            Cobrança gravado com sucesso.
                        </div>
                    <?php endif; ?>

                    <?php if (isset($_GET['erro'])): ?>
                        <div class="alert alert-danger" role="alert">
                            <strong>Erro!</strong>
                            Ocorreu um erro ao gravar, verifique!
                        </div> 
                    <?php endif; ?>
                </fieldset>
            </form>
        </div>
    </div>
</div>

