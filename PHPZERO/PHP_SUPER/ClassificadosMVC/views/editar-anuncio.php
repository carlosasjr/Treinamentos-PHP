<div class="container">
    <h1>Meus Anúncios - Editar Anúncios</h1>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria" class="form-control">
                <?php
                foreach ($cats as $cat) :
                    ?>
                    <option value="<?= $cat['id']; ?>" <?= ($info['id_categoria'] == $cat['id']) ? ' selected="selected"' : "" ?>><?= $cat['nome'] ?></option>

                <?php endforeach; ?>

            </select>
        </div>


        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="<?= $info['titulo'] ?>">
        </div>

        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" name="valor" id="valor" class="form-control" value="<?= $info['valor'] ?>">
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control"><?= $info['descricao']; ?></textarea>
        </div>

        <div class="form-group">
            <label for="estado">Estado de Conservação</label>
            <select name="estado" id="estado" class="form-control">
                <option value="0" <?= ($info['estado'] == 0) ? 'selected="selected"' : "" ?>>Ruim</option>
                <option value="1" <?= ($info['estado'] == 1) ? 'selected="selected"' : "" ?>>Bom</option>
                <option value="2" <?= ($info['estado'] == 2) ? 'selected="selected"' : "" ?>>Ótimo</option>
            </select>
        </div>

        <div class="form-group">
            <label for="add_foto">Fotos do anúncio:</label>
            <input type="file" name="fotos[]" multiple><br>

            <div class="card card-default">
                <div class="card-header">Fotos do Anúncio</div>
                <div class="card-body">
                    <?php foreach ($info['fotos'] as $foto) : ?>

                        <div class="foto_item">
                            <img class="img-thumbnail" src="<?php echo BASE_URL; ?>assets/images/anuncios/<?= $foto['url'] ?>" border="0"> <br>
                            <a href="<?php echo BASE_URL; ?>anuncios/excluirfoto/<?= $foto['id'] ?>" class="btn btn-default" href="">Excluir
                                Imagem</a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <br>

            </div>
        </div>

        <input type="submit" value="Salvar" class="btn btn-primary" name="btnForm">
    </form>

</div>