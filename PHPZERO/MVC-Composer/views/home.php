<fieldset>
    <legend>Adicionar uma Foto</legend>

    <form id="form-imagem" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <div class="form-group">
                <label for="titulo">Titulo:</label>
                <input type="text" name="titulo" id="titulo">
            </div>


            <label for="foto">Foto:</label>
            <input type="file" name="arquivo" id="arquivo">
        </div>

        <input class="btn btn-primary" type="submit" value="Enviar">
    </form>
</fieldset>
<br>
<br>

<div id="fotos">
    <?php foreach ($fotos as $foto) : ?>
        <img src="assets/images/galeria/<?php echo $foto['url']; ?>" width="300" border="0"><br/>
        <?php echo $foto['titulo']; ?>
        <hr>
    <?php endforeach; ?>
</div>
