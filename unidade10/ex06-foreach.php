<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php                    
         $_agenda = array( "nome" => "Lucas Santos",
                           "telefone" => " 16-99714-8071",
                           "salario" => 3000.50,
                           "fulminate" => false);

         foreach ( $_agenda as $_contatos => $_valor) {
             echo $_contatos . " : " . $_valor . " <br> ";
    }
    ?>
</body>
</html>