<?php
    if (isset($_POST["formulario"])) {
        $_nome = isset($_POST["nome"]) ? $_POST[ "nome"] : "Nome sem definição";
        $_nome = isset($_POST["email"]) ? $_POST[ "email"] : "Email sem definição";

    }
?>



<!doctype html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Curso PHP FUNDAMENTAL</title>
    <link> href="_css/estilo.css" rel="stylesheet>
    </head>

     <body>
             <form action="formulario.php" method="post">
                 <label for="nome">Nome COmpleto</label>
                 <input type="text" nome="nome" id="nome">

                 <label for="email">Email</label>
                 <input type="submit" name="formulario">
             </form>
     </body>
</html>