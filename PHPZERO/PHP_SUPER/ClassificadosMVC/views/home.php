<div class="container-fluid">
    <div class="jumbotron">
        <h2>Nós temos hoje <?= $total_anuncios ?> anúncio(s)</h2>
        <p>Existe mais de <?= $total_usuario ?> usuário(s) cadastrado(s)</p>
    </div>

    <?php
    if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])) {
        echo $_SESSION['cLogin']['nome'] . " Seja bem vindo!";
    }
    ?>

    <div class="row">
        <div class="col-sm-3">
            <h4>Pesquisa Avançada</h4>
            <form method="get">
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <select id="categoria" name="filtros[categoria]" class="form-control">
                        <option></option>
                        <?php foreach ($categorias as $cat) : ?>
                            <option value="<?= $cat['id']; ?>" <?php echo ($cat['id'] == $filtros['categoria']) ? 'selected' : '' ?>><?= $cat['nome']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="preco">Preço:</label>
                    <select id="preco" name="filtros[valor]" class="form-control">
                        <option></option>
                        <option value="0-50" <?php echo ($filtros['valor'] == '0-50') ? 'selected' : '' ?>>R$ 0 -
                            50,00
                        </option>
                        <option value="51-100" <?php echo ($filtros['valor'] == '51-100') ? 'selected' : '' ?>>R$ 51,000
                            - 100,00
                        </option>
                        <option value="101-200" <?php echo ($filtros['valor'] == '101-200') ? 'selected' : '' ?>>R$
                            101,000 - 200,00
                        </option>
                        <option value="201-500" <?php echo ($filtros['valor'] == '201-500') ? 'selected' : '' ?>>R$
                            201,000 - 500,00
                        </option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="estado">Estado:</label>
                    <select id="estado" name="filtros[estado]" class="form-control">
                        <option></option>
                        <option value="0" <?php echo ($filtros['estado'] == '0') ? 'selected' : '' ?>>Ruim</option>
                        <option value="1" <?php echo ($filtros['estado'] == '1') ? 'selected' : '' ?>>Bom</option>
                        <option value="2" <?php echo ($filtros['estado'] == '2') ? 'selected' : '' ?>>Ótimo</option>
                    </select>
                </div>

                <div class="form-group">
                    <input class="btn btn-info" type="submit" value="Buscar">
                </div>


            </form>
        </div>


        <div class="col-sm-9">
            <h4>Últimos Anúncios</h4>
            <table class="table table-striped">
                <tbody>
                <?php foreach ($anuncios as $anuncio): ?>
                    <tr>
                        <td>
                            <?php if (!empty($anuncio['url'])) : ?>

                                <img src="<?php echo BASE_URL ?>assets/images/anuncios/<?= $anuncio['url'] ?>"
                                     border="0" height="50">

                            <?php else : ?>
                                <img src="<?php echo BASE_URL ?>assets/images/anuncio.jpg" border="0" height="50">
                            <?php endif; ?>
                        </td>

                        <td>
                            <a href="<?php echo BASE_URL ?>produto/abrir/<?= $anuncio['id']; ?>"><?= $anuncio['titulo'] ?></a><br>
                            <?= $anuncio['categoria'] ?> <br>
                            <?= $anuncio['estado'] ?>
                        </td>
                        <td>R$ <?php echo number_format($anuncio['valor'], 2, ',', '.') ?></td>
                        <td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

            <?php

            ?>

            <ul class="pagination">
                <?php for ($q = 1; $q <= $total_paginas; $q++) : ?>
                    <li class="page-item <?php echo ($p == $q) ? "active" : '' ?>">
                        <a class="page-link" href="<?php echo BASE_URL; ?>?
                        <?php

                        $w['p'] = $q;
                        echo http_build_query($w);

                        ?>"><?php echo($q); ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>
