<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{
            display: inline-block;
            background-color: blanchedalmond;
        }
    </style>
</head>
<body>
    <?php
    include("cabecera.php");
    ?>
    <form action="cosa.php" method="post">
        <center><fieldset>
            <legend>Formulario Comentario</legend>
            <center>Asunto <input type="text" name="achunto" value=""/></center>
            <center><label for="sugerencia">Comentario</label></center>
            <center><textarea id="sugerencia" name="sugerencia" cols="40" rows="5"></textarea></center>
            <center><input type="submit" name="registro" value="Registrar"/></center>
            <center><input type="reset" name="limpiar" value="Borrar datos del formulario"/></center>
        </center></fieldset>
    </form>
    <?php
    include("piepagina.php");
    ?>
</body>
</html>