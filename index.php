<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php $string= "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
    echo("$string")?>
    <br>
    Lunghezza:<?php  strlen($string);
    echo(strlen($string))?>
    <br>
    <?php $stringBad= "Lorem $_GET('badword') dolor sit amet, consectetur adipiscing elit.";
        $newString= str_replace("$_GET('badword')", "****",
       $stringBad);
       echo("$newString")
    ?>
    </h1>
</body>
</html>