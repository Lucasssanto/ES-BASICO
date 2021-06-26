<?php
     $_megasena = array(49,58,29,00,10,64);

     sort($_megasena);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
           echo min($_megasena) . "<br>";
           echo max($_megasena) . "<br>";
        ?>   
        <pre>
        <?php 
           print_r($_megasena);
        ?>
        </pre>
    </body>
</html>