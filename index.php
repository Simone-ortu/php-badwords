<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php
        $_GET["badword"];
        $string = "Che bella $_GET[badword]";
        $newString = str_replace("$_GET[badword]", "***", $string);
        echo ($newString);
        ?></h1>

</body>

</html>