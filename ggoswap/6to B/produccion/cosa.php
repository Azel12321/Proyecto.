<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $asunto=$_POST['achunto'];
    $suge=$_POST['sugerencia'];
    $info=fopen("oswap.txt","a");
    fwrite($info,"ASUNTO: " .PHP_EOL);
    fwrite($info,$asunto);
    fwrite($info,"COMENTARIO: " .PHP_EOL);
    fwrite($info,$suge);
    echo 'se envió correctamente, si quiere verlo ve a este enlace <a href="archivo3.php">ir a</a>'
    ?>
</body>
</html>