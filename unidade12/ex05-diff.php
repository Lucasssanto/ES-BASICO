<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
       $_data1 = new  DateTime("2018-05-14");
       $_data2 = new  DateTime( "2021-06-23");
       $_intervalo = $_data1->diff($_data2);
    ?>

    <pre>
        <?php
            print_r($_intervalo);
        ?>
    </pre>
    <pre>
        <?php
            print_r($_intervalo->format("%r%a"))
        ?>
    </pre>
    </body>
</html>