<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        function converterCF( $_temp ) {
            return ( $_temp * 1.8) + 32;
        }
        echo converterCF(15);
    ?>
</body>
</html>