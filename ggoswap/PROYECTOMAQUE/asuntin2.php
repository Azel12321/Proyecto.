<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $asu=$_POST['asunto'];
    $suge=$_POST['sugerencia'];
    $resu=fopen("dodito.txt","w");
    fwrite($resu, "ASUNTO");
    fwrite($resu, $asu);
    fwrite($resu, "SUGERENCIA");
    fwrite($resu,$suge);
    ?>
</body>
</html>