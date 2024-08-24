<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$asunto=$_POST['asunto']; 
$some=$_POST['sugerencia'];
$info=fopen("natte.txt","a");
fwrite($info, "ASUNTO:".PHP_EOL);
fwrite($info, $asunto .PHP_EOL);
fwrite($info, "SUGERENCIAS: ".PHP_EOL);
fwrite($info, $come .PHP_EOL);
?>
</body>
</html>