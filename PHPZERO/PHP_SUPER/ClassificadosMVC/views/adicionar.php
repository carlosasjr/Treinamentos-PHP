<div class="container">
    <h1>Meus Anúncios - Adicionar Anúncios</h1>

    <?php
    if (!empty($msg)) {
        echo $msg;
    }
    ?>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria" class="form-control">
                <?php foreach ($cats as $cat) : ?>
                    <option value="<?= $cat['id']; ?>"><?= $cat['nome'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>


        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo" class="form-control">
        </div>

        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" name="valor" id="valor" class="form-control">
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="estado">Estado de Conservação</label>
            <select name="estado" id="estado" class="form-control">
                <option value="0">Ruim</option>
                <option value="1">Bom</option>
                <option value="2">Ótimo</option>
            </select>
        </div>

        <input type="submit" value="Adicionar" class="btn btn-primary" name="btnForm">

    </form>

</div>
