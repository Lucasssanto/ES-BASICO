<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php
            $_idade = 18;
            $_sexo = " femenino ";
            $_idade = 25;
            $_sexo = " masculino ";
            $_dia = " sábado ";

            if ($_idade >= 18 && $_sexo == " masulino ") {
            echo  " Pode entrar na festa. ";
            } else {
                echo " Não pode entar na festa. ";
            }

            if ($_idade >= 18 && $_sexo == " feminio ") {
                echo  " Pode entrar na festa. ";
            } else{
                echo " Não pode entar na festa. ";
            }

            if ( $_dia == " sábado " || $_dia == " domingo ") {
                echo  " PODE DESCANSAR!!.";
            } else {
                echo  " DIA DE TRABALHO!!.";
            }
        ?>
    </body>
</html>