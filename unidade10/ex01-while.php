<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php
        $_contador = 1;
        while($_contador < 4) {
            $_sorteio = rand( 1,60);
            echo  $_sorteio . "    ";
            $_contador = $_contador + 1;
        }
    ?>
</body>
</html>