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
    <!-- creo la stringa, la stampo -->
        <?php $string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
        echo ("$string") ?>
        <br>
        <!-- stampo la lunghezza della stringa -->
        Lunghezza:<?php strlen($string);
                    echo (strlen($string)) ?>
        <br>
        <!-- aggiungo il comando $_GET e lo cambio tramite str_replace, trasformandolo in ***** -->
        <?php $stringBad = "Lorem $_GET('badword') dolor sit amet, consectetur adipiscing elit.";
        $newString = str_replace(
            "$_GET('badword')",
            "****",
            $stringBad
        );
        echo ("$newString")
        ?>
    </h1>
</body>

</html>