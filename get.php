<?php
$_GET["badword"];
$string = "Che bella $_GET[badword]";
$newString = str_replace("$_GET[badword]","***", $string);
echo ($newString);
?>