<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LS SITES</title>
    </head>

    <body>
    <?php
         $_salada = array("imagens/laranja.jpg", "imagens/maca.jpg", "imagens/abacate.jpg",);
        $_codigo = $_GET["codigo"];

        echo $_salada [$_codigo];
    ?>

    <img src="
           <?php
            echo $_salada[$_codigo];
?>">
    </body>
</html>