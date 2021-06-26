<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php
        function retonarDianrio($_salario, $_dias){
            return number_format($_salario/$_dias , 2);
        }

        echo  retonarDianrio(2500,15) . "<br>";
    echo  retonarDianrio(5000, 10) . "<br>";
    ?>
</body>
</html>