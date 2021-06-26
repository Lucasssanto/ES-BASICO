<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php

            $_nome = isset($_POST["nome"]) ? $_POST["nome"] : "Sem definição";
            $_email = isset($_POST["email"]) ? $_POST["email"] : "Sem definição";
            echo "Nome: " . $_nome . "<br>";
        echo "Email: " . $_email . "<br>";

        ?>

    </body>
</html>