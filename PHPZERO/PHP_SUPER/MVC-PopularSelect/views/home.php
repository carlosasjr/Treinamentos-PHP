<form method="post">
    <div class="form-group">
        <label for="modulo">Escolha o módulo</label>
        <select id="modulos" name="modulos" class="form-control" onchange="pegarAulas(this)">
            <option></option>
            <?php  foreach ($modulos as $modulo) : ?>
                <option value="<?= $modulo['id'] ?>"><?= $modulo['titulo'] ?></option>
            <?php  endforeach; ?>
        </select>
    </div>

    <div class="form-group">
        <label for="modulo">Escolha a aula</label>
        <select id="aulas" name="aulas" class="form-control">

        </select>
    </div>

    <input type="submit" value="Enviar">
</form>
