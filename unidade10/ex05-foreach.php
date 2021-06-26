<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
        $_salada = array( " Laranja ", " Uva ", "Abacaxi ");

        foreach ( $_salada as $_frutas) {
            echo $_frutas . " <br> ";
        }
    ?>
</body>
</html>