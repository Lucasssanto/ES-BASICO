<?php
    $_salada = array("Laranja","Uva","Abacate");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo " Existe o elemento desejado? " . in_array("Laranja",$_salada);
        ?>
    </body>
</html>