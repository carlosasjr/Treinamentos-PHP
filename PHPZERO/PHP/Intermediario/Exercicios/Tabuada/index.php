<table border="1">

    <?php
    for ($l = 1; $l <= 9; $l++) {
        echo "<tr>";
        for ($c = 1; $c <= 9; $c++) {

            echo "<td>" . ($l * $c) . "</td>";
        }
        echo "</tr>";


    }
    ?>

</table>