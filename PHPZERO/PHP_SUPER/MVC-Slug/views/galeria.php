<ul>
<?php foreach ($albuns as $albun) : ?>
 <li><a href="<?php echo BASE_URL . 'galeria/' . $albun['slug'] ?>"><?= $albun['titulo'] ?></li></a>
<?php endforeach; ?>
</ul>

