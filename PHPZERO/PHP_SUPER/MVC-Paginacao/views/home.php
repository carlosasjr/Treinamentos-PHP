<table class="table table-hover" border="0" width="300">

    <?php foreach ($lista as $item) :   ?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['title'] ?></td>
        </tr>
    <?php endforeach; ?>

</table>

<?php for ($q = 1; $q <= $paginas; $q++) : ?>
    <a href="<?php echo BASE_URL; ?>?p=<?= $q ?>"><?= $q ?></a>
<?php endfor; ?>


