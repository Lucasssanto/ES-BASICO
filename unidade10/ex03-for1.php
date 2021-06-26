<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LS SORTEIOS </title>
</head>
<body>
    <?php
       $_contador = 1;
       while($_contador < 4) {
        $_sorteio = rand( 1,60);
        echo  $_sorteio . "    ";
        $_contador = $_contador + 1;

       }

       for ( $_contador = 1 ; $_contador < 5 ;$_contador = $_contador + 3 ) {
           $_sorteio = rand(1,60);
           echo  $_sorteio . "    ";
       }
    ?>
</body>
</html>