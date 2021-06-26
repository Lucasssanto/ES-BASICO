<!doctype html>
<
html>
    <head>
        <meta charset="UTF-8">
        <title>LS RELOGIO</title>
    </head>

    <body>
        <?php
            //Determinar timezone
            date_default_timezone_set('US/Eastern');
            $_agora = getdate();
            print_r($_agora);

            // Criar elementos
            $_segundo   = $_agora["seconds"];
            $_minutos   = $_agora["minutes"];
            $_hora      = $_agora["hours"];

            $_dia       = $_agora["mday"];
            $_mes       = $_agora["month"];
            $_ano       = $_agora["year"];

            //m Mostrar na tela
            echo $_hora . " : " . $_minutos . " : " . $_segundo . " - " . $_dia . " de " . $_mes . " de " . $_ano;

        ?>
    </body>
</html>